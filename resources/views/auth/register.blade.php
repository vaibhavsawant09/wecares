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
            margin: 15px;
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
                        <h1 class="text-anime-style-3"></h1>
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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Personal Information -->
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" id="full_name" name="full_name" placeholder="First Name, Middle Name, Last Name" value="{{ old('full_name') }}" required>
                            @error('full_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob" value="{{ old('dob') }}" required>
                            @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="marital_status">Marital Status</label>
                            <select id="marital_status" name="marital_status" required>
                                <option value="Single" {{ old('Single') == 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Married" {{ old('Single') == 'Married' ? 'selected' : '' }}>Married</option>
                                <option value="Other" {{ old('Single') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('marital_status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nationality" value="{{ old('nationality') }}">Nationality</label>
                            <input type="text" id="nationality" name="nationality" required>
                            @error('nationality')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="occupation" value="{{ old('occupation') }}">Occupation</label>
                            <input type="text" id="occupation" name="occupation" required>
                            @error('occupation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Contact Information -->
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="example@mail.com" value="{{ old('email') }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="123-456-7890" value="{{ old('phone') }}" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alt_phone">Alternative Phone Number (Optional)</label>
                            <input type="tel" id="alt_phone" name="alt_phone" placeholder="123-456-7890" value="{{ old('alt_phone') }}" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                            @error('alt_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Address Information -->
                        <div class="form-group">
                            <label for="address1">Address Line 1</label>
                            <input type="text" id="address1" name="address1" value="{{ old('address1') }}" required>
                            @error('address1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address2">Address Line 2 (Optional)</label>
                            <input type="text" id="address2" name="address2" value="{{ old('address2') }}" >
                            @error('address2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" value="{{ old('city') }}" required>
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="state">State/Province</label>
                            <input type="text" id="state" name="state" value="{{ old('state') }}" required>
                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="postal_code">Postal/ZIP Code</label>
                            <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code') }}" required>
                            @error('postal_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country" value="{{ old('country') }}" required>
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Security Information -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Consent -->
                        <div class="form-group">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
                            @error('terms')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">I agree to the <a href="#">Privacy Policy</a></label>
                            @error('privacy')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit">Register</button>
                    </form>
                    <div class="forgot-password">
                        <a href="{{url('login')}}">Already User? Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form End -->

    @include('footer')
</body>

</html>