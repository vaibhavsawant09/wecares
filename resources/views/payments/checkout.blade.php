<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .infoBox {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .infoBox h5 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .infoBox p {
            font-size: 16px;
            margin: 10px 0;
            color: #555;
        }

        #renderBtn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #renderBtn:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="infoBox">
        <h5>Policy Details</h5>
        <p>Policy ID: {{$insurancePolicy->id}}</p>
        <p>Sum Assured: {{$insurancePolicy->coverage_amount}}</p>
        <p>Premium: {{$insurancePolicy->premium}}</p>
        <p>Tenure: {{$insurancePolicy->tenure.' '.$insurancePolicy->interval}} </p>

        <button type="button" id="renderBtn">Confirm & Pay</button>
    </div>

    <script>
        const cashfree = Cashfree({
            mode: "<?php echo $order->paymode ?>" // or production
        });
        document.getElementById("renderBtn").addEventListener("click", () => {
            cashfree.checkout({
                paymentSessionId: "<?php echo $paymentSessionId ?>"
            });
        });
    </script>
</body>

</html>