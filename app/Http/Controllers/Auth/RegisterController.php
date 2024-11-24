<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'unique:members,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'marital_status' => 'required|in:Single,Married,Other',
            'nationality' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'phone' => 'required',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'country' => 'required|string|max:255',
            'terms' => 'accepted',
            'privacy' => 'accepted',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        try {
            // Create a new user record
            $user = User::create([
                'name' => $data['full_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role_id' => 3,
            ]);

            $user->assignRole('MEMBER');

            // Create a new member record
            $member = new Member();
            $member->user_id = $user->id;
            $member->full_name = $data['full_name'];
            $member->dob = $data['dob'];
            $member->gender = $data['gender'];
            $member->marital_status = $data['marital_status'];
            $member->nationality = $data['nationality'];
            $member->occupation = $data['occupation'];
            $member->email = $data['email'];
            $member->phone = $data['phone'];
            $member->alt_phone = $data['alt_phone'] ?? null;
            $member->address1 = $data['address1'];
            $member->address2 = $data['address2'] ?? null;
            $member->city = $data['city'];
            $member->state = $data['state'];
            $member->postal_code = $data['postal_code'];
            $member->country = $data['country'];
            $member->terms_and_conditions = 1;
            $member->privacy_policy = 1;
            $member->save();

            return $user;
        } catch (\Exception $e) {
            \Log::error([$e->getMessage(), $e->getLine(), $e->getFile()]);

            // Re-throw the exception for proper handling
            throw new \RuntimeException('Failed to register user.');
        }
    }
}
