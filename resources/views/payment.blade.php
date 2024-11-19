<?php
// Replace these with your Razorpay credentials
$key_id = "rzp_test_epOU6QzT6a1s6h";
$key_secret = "gbFP0gCSYH17kbgwSmXDLqN0";

// Set the order details
$orderData = [
    'amount' => 50000, // Amount in paise (e.g., 50000 paise = 500 INR)
    'currency' => 'INR',
    'receipt' => "ORD" . rand(1000, 9999), // Prefix with text to ensure it's a string
    'payment_capture' => 1 // Auto capture
];


// Initialize cURL
$ch = curl_init('https://api.razorpay.com/v1/orders');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $key_id . ":" . $key_secret);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

// Execute cURL request
$response = curl_exec($ch);
curl_close($ch);

$order = json_decode($response);
$orderId = $order->id; // Capture the Razorpay order ID
?>

<!-- Step 2: HTML Form for Payment -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Razorpay Payment</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>
    <button id="pay-button">Pay with Razorpay</button>

    <script>
        const options = {
            "key": "<?php echo $key_id; ?>", // Key ID from Razorpay
            "amount": "50000", // Amount in subunits (e.g., 50000 = 500 INR)
            "currency": "INR",
            "name": "Your Company Name",
            "description": "Payment for Order #<?php echo $orderId; ?>",
            "order_id": "<?php echo $orderId; ?>", // Razorpay order ID
            "handler": function(response) {
                alert("Payment successful!");
                console.log(response); // Capture the response here
            },
            "prefill": {
                "name": "Customer Name",
                "email": "customer@example.com",
                "contact": "9876543210"
            },
            "theme": {
                "color": "#3399cc"
            }
        };

        const rzp1 = new Razorpay(options);
        document.getElementById('pay-button').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>
</body>

</html>