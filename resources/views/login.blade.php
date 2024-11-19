<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        nav ol {
            padding: 0;
            margin: 0;
            list-style-type: none;
            display: inline-flex;
        }

        nav ol li {
            margin-right: 15px;
            font-size: 16px;
            color: #114A43;
        }

        /* Login Form */
        .login-form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            margin: 15px;
        }

        .login-form h3 {
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

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 2px solid #114A43;
            border-radius: 6px;
            font-size: 16px;
            color: #333;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
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

            .login-form {
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
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3"></h1>
                        <nav>
                            <ol class="breadcrumb">
                                <!-- Add breadcrumb links if needed -->
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Login Form Start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h3>Login to Your Account</h3>
                    <form action="login_process.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit">Login</button>
                    </form>
                    <div class="forgot-password">
                        <a href="{{url('forgot_password')}}">Forgot Password?</a> / <a href="{{url('register')}}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Form End -->

    @include('footer')
</body>

</html>