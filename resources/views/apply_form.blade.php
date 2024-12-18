<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        h1,
        h3 {
            color: #114A43;
        }

        /* Page Header */
        .page-header {
            background-color: #D8E28C;
            padding: 40px 0;
            text-align: center;
        }

        .page-header-box {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .text-anime-style-3 {
            font-size: 36px;
            font-weight: bold;
            color: #114A43;
        }

        /* Form Styling */
        .register-form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 0 auto;
        }

        .register-form h3 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #114A43;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #114A43;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #114A43;
            border-radius: 6px;
            font-size: 16px;
            color: #333;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #D8E28C;
            outline: none;
        }

        button[type="submit"] {
            background-color: #114A43;
            color: white;
            border: none;
            padding: 12px;
            font-size: 18px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #D8E28C;
        }

        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password a {
            color: #114A43;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header {
                padding: 20px 0;
            }

            .page-header-box {
                padding: 15px;
            }

            .register-form {
                padding: 30px;
            }
        }
    </style>
</head>

<body>
    @include('nav')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3">Register</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Register Form Start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="register-form">
                    <h3>Register Your Account</h3>
                    <form action="register_process.php" method="POST" enctype="multipart/form-data">
                        <!-- Personal Information -->
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" id="fullname" name="fullname" placeholder="First Name, Middle Name, Last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="marital_status">Marital Status</label>
                            <select id="marital_status" name="marital_status" required>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality</label>
                            <input type="text" id="nationality" name="nationality" required>
                        </div>
                        <div class="form-group">
                            <label for="occupation">Occupation</label>
                            <input type="text" id="occupation" name="occupation" required>
                        </div>

                        <!-- Contact Information -->
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="example@mail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                        </div>
                        <div class="form-group">
                            <label for="alt_phone">Alternative Phone Number (Optional)</label>
                            <input type="tel" id="alt_phone" name="alt_phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                        </div>

                        <!-- Address Information -->
                        <div class="form-group">
                            <label for="address1">Address Line 1</label>
                            <input type="text" id="address1" name="address1" required>
                        </div>
                        <div class="form-group">
                            <label for="address2">Address Line 2 (Optional)</label>
                            <input type="text" id="address2" name="address2">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" required>
                        </div>
                        <div class="form-group">
                            <label for="state">State/Province</label>
                            <input type="text" id="state" name="state" required>
                        </div>
                        <div class="form-group">
                            <label for="postal_code">Postal/ZIP Code</label>
                            <input type="text" id="postal_code" name="postal_code" required>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country" required>
                        </div>

                        <!-- Insurance Information -->
                        <div class="form-group">
                            <label for="policy_type">Policy Type</label>
                            <select id="policy_type" name="policy_type" required>
                                <option value="Life">Life</option>
                                <option value="Health">Health</option>
                                <option value="Vehicle">Vehicle</option>
                                <option value="Property">Property</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="policy_number">Policy Number</label>
                            <input type="text" id="policy_number" name="policy_number" required>
                        </div>
                        <div class="form-group">
                            <label for="plan_type">Plan Type</label>
                            <select id="plan_type" name="plan_type" required>
                                <option value="Basic">Basic</option>
                                <option value="Premium">Premium</option>
                                <option value="Custom">Custom</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sum_insured">Sum Insured</label>
                            <input type="number" id="sum_insured" name="sum_insured" required>
                        </div>
                        <div class="form-group">
                            <label for="policy_term">Policy Term</label>
                            <input type="text" id="policy_term" name="policy_term" required>
                        </div>
                        <div class="form-group">
                            <label for="policy_start_date">Policy Start Date</label>
                            <input type="date" id="policy_start_date" name="policy_start_date" required>
                        </div>
                        <div class="form-group">
                            <label for="policy_end_date">Policy End Date</label>
                            <input type="date" id="policy_end_date" name="policy_end_date" readonly required>
                        </div>
                        <div class="form-group">
                            <label for="nominee_name">Nominee Name</label>
                            <input type="text" id="nominee_name" name="nominee_name" required>
                        </div>
                        <div class="form-group">
                            <label for="nominee_relationship">Nominee Relationship</label>
                            <select id="nominee_relationship" name="nominee_relationship" required>
                                <option value="Spouse">Spouse</option>
                                <option value="Child">Child</option>
                                <option value="Parent">Parent</option>
                                <option value="Sibling">Sibling</option>
                            </select>
                        </div>

                        <!-- Payment Information -->
                        <div class="form-group">
                            <label for="payment_frequency">Payment Frequency</label>
                            <select id="payment_frequency" name="payment_frequency" required>
                                <option value="Monthly">Monthly</option>
                                <option value="Quarterly">Quarterly</option>
                                <option value="Annually">Annually</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="payment_mode">Payment Mode</label>
                            <select id="payment_mode" name="payment_mode" required>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Net Banking">Net Banking</option>
                                <option value="UPI">UPI</option>
                                <option value="Cash">Cash</option>
                            </select>
                        </div>

                        <!-- Document Uploads -->
                        <div class="form-group">
                            <label for="id_proof">Proof of Identity</label>
                            <input type="file" id="id_proof" name="id_proof" accept=".jpg,.jpeg,.png,.pdf">
                        </div>
                        <div class="form-group">
                            <label for="address_proof">Proof of Address</label>
                            <input type="file" id="address_proof" name="address_proof" accept=".jpg,.jpeg,.png,.pdf">
                        </div>

                        <!-- Security Information -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" required>
                        </div>

                        <!-- Consent -->
                        <div class="form-group">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">I agree to the <a href="#">Privacy Policy</a></label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form End -->

    @include('footer')
</body>

</html>