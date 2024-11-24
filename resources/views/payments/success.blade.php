<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center text-success">
                        <h5>Payment Successful!</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-center">Thank you for your payment. Your insurance policy has been successfully applied.</p>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Order ID:</strong> {{ $orderId }}
                            </div>
                            <div class="col-md-6 text-right">
                                <strong>Policy ID:</strong> {{ $policyId }}
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <strong>Member ID:</strong> {{ $memberId }}
                            </div>
                            <div class="col-md-6 text-right">
                                <strong>Payment Status:</strong> Successful
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <strong>Order Date:</strong> {{ $order->created_at }}
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12 text-center">
                                <a href="" class="btn btn-secondary">Back to Dashboard</a>
                                <button class="btn btn-primary" id="download-pdf-btn">Download Payment Receipt</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        document.getElementById('download-pdf-btn').addEventListener('click', function () {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            
            // Data to be included in the PDF
            const orderId = "{{ $orderId }}";
            const policyId = "{{ $policyId }}";
            const paymentStatus = "Successful";
            const orderDate = "{{ $order->created_at }}";
            const memberId = "{{ $memberId }}";

            // Content for the PDF
            const orderDetails = `
                Order ID: ${orderId}
                Policy ID: ${policyId}
                Payment Status: ${paymentStatus}
                Order Date: ${orderDate}
                Member ID: ${memberId}
                Thank you for your payment!
            `;
            
            // Generate PDF
            doc.setFontSize(12);
            doc.text(orderDetails, 10, 10);
            doc.save(`Payment_Details_${orderId}.pdf`);
        });
    </script>
</body>

</html>
