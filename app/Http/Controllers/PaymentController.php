<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\PolicyHolder;
use Illuminate\Http\Request;
use App\Models\InsuranceOrder;
use App\Models\InsurancePolicy;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Payment\InitiateRequest;

class PaymentController extends Controller
{
    public function initiatePayment(InitiateRequest $request)
    {
        $insurancePolicy = InsurancePolicy::find($request->insurance_policy_id);
        $config = config('payment.cashfree');

        $user = Auth::user();
        $member = $user->member;

        $alreadyApplied = PolicyHolder::where('insurance_policy_id', $insurancePolicy->id)
            ->where('user_id', Auth::user()->id)
            ->whereNot('status', PolicyHolder::REJECTED)
            ->first();

        if ($alreadyApplied) {
            return back()->with('error', 'You have Already applied for this insurance policy.');
        }

        // $orderId = $this->generateOrderId('ORD_');

        $order = new InsuranceOrder();
        $order->member_id = $member->id;
        $order->order_id = $order->id;
        $order->insurance_policy_id = $insurancePolicy->id;
        $order->order_amount = $insurancePolicy->premium;
        $order->order_currency = $insurancePolicy->currency ?? 'INR';
        $order->order_expiry_time = null;
        $order->order_note = null;
        $order->payment_methods = null;
        $order->customer_id = $member->id;
        $order->customer_name = $member->full_name;
        $order->customer_email = $member->email;
        $order->customer_phone = $member->phone;
        $order->customer_uid = null;
        $order->status = InsuranceOrder::ACTIVE;
        $order->paymode = $config['environment'] === 'production' ? 'production' : 'sandbox';
        $order->save();

        $order->order_id = $order->id;
        $order->return_url = config('app.url') . "/payment/success?order_id={$order->order_id}&policy_id={$insurancePolicy->id}&member_id={$member->id}" ?? null;
        $order->save();

        $cleanedPhone = preg_replace('/[^0-9]/', '', $order->customer_phone);

        $paymentData = [
            'order_id' => $order->order_id,
            'order_amount' => $order->order_amount,
            'order_currency' => 'INR',
            'customer_details' => [
                'customer_id' => uniqid(),
                'customer_name' => $order->customer_name,
                'customer_email' => $order->customer_email, // Adjust to real data
                'customer_phone' => $cleanedPhone, // Adjust to real data
            ],
            'order_meta' => [
                'return_url' => $order->return_url,
                'notify_url' => config('app.url') . "/payment/webhook",
            ],
        ];

        $clientId = $config['client_id'];
        $clientSecret = $config['client_secret'];
        $apiUrl = $config['environment'] === 'production' ? $config['production_url'] : $config['sandbox_url'];
        $res = Http::withHeaders([
            'X-Client-Secret' => $clientSecret,
            'X-Client-Id' => $clientId,
            'Content-Type' => 'application/json',
            'x-api-version' => '2023-08-01',
        ])->post($apiUrl, $paymentData);

        $response = $res->json();

        $paymentSessionId = $response['payment_session_id'];
        $data = compact('paymentSessionId', 'insurancePolicy', 'order');
        if (isset($response['payment_session_id'])) {
            return view('payments.checkout')->with($data);
        }

        info('Failed to initiate payment.');
        return back()->with('error', 'Failed to initiate payment.');
    }


    public function paymentSuccess(Request $request)
    {
        $orderId = $request->order_id;
        $policyId = $request->policy_id;
        $memberId = $request->member_id;

        // Validate input parameters
        if (!$orderId || !$policyId || !$memberId) {
            return response()->json(['error' => 'Invalid parameters'], 400);
        }

        // Fetch member and order details
        $member = Member::findOrFail($memberId);
        $order = InsuranceOrder::where('order_id', $orderId)->first();

        $order->update([
            'status' => InsuranceOrder::PAID
        ]);

        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }

        // Create a policy holder record for the payment
        $policyHolder = PolicyHolder::create([
            'user_id' => $member->user_id,
            'member_id' => $memberId,
            'insurance_policy_id' => $policyId,
            'insurance_order_id' => $order->id,
            'status' => PolicyHolder::PENDING,
            'claim_status' => PolicyHolder::NONE,
        ]);

        // Pass data to the success view
        return view('payments.success', compact('orderId', 'policyId', 'memberId', 'order'));
    }


    // Request to Cashfree API

    // $curl = curl_init();

    // curl_setopt_array($curl, [
    //     CURLOPT_URL => $apiUrl,
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_CUSTOMREQUEST => 'POST',
    //     CURLOPT_POSTFIELDS => json_encode($paymentData),
    //     CURLOPT_HTTPHEADER => [
    //         'X-Client-Secret: ' . $clientSecret,
    //         'X-Client-Id: ' . $clientId,
    //         'Content-Type: application/json',
    //         'x-api-version: 2023-08-01',
    //     ],
    // ]);

    // $response = curl_exec($curl);

    // if (curl_errno($curl)) {
    //     // Handle cURL error
    //     $errorMessage = curl_error($curl);
    //     info('cURL error: ' . $errorMessage);
    //     curl_close($curl);

    //     return response()->json([
    //         'success' => false,
    //         'message' => $errorMessage,
    //     ], 500);
    // }

    // curl_close($curl);

    // // Parse the response
    // $responseData = json_decode($response, true);

    // if (isset($responseData['error'])) {
    //     return response()->json([
    //         'success' => false,
    //         'message' => $responseData['error']['message'] ?? 'An error occurred.',
    //     ], 500);
    // }

}
