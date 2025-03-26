<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System - Register</title>
    <style>
        /* Using the same base styles as your login page */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #e0e8ff 0%, #f5f7ff 100%);
        }

        .register-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .register-header h1 {
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            border-color: #6c63ff;
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            background: #6c63ff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .register-btn:hover {
            background: #5a52d5;
        }

        .divider {
            text-align: center;
            margin: 1.5rem 0;
            position: relative;
        }

        .divider::before,
        .divider::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background: #ddd;
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .social-btn {
            padding: 8px 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: white;
            cursor: pointer;
        }

        .social-btn img {
            width: 24px;
            height: 24px;
        }

        .signin-link {
            text-align: center;
            font-size: 0.9rem;
        }

        .signin-link a {
            color: #6c63ff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <h1>Register</h1>
        </div>
        <form>
            <div class="form-group">
                <input type="text" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" required>
            </div>
            <button type="submit" class="register-btn">Sign Up</button>
            <div class="divider">or</div>
            <div class="social-login">
                <button type="button" class="social-btn">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google">
                </button>
                <button type="button" class="social-btn">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
                </button>
            </div>
            <div class="signin-link">
                Already Have Account? <a href="login.html">Sign In</a>
            </div>
        </form>
    </div>
</body>
</html>
