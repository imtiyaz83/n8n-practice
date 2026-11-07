<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Your Application</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #4338ca);
            overflow-x: hidden;
        }

        .background-circle {
            position: fixed;
            border-radius: 50%;
            filter: blur(2px);
            opacity: 0.18;
            pointer-events: none;
        }

        .circle-one {
            width: 300px;
            height: 300px;
            background: #60a5fa;
            top: -100px;
            left: -80px;
        }

        .circle-two {
            width: 350px;
            height: 350px;
            background: #c084fc;
            bottom: -140px;
            right: -100px;
        }

        .login-card {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 420px;
            padding: 42px 36px;
            background: rgba(255, 255, 255, 0.97);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 24px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.25);
        }

        .brand-icon {
            width: 62px;
            height: 62px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 22px;
            border-radius: 18px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            font-size: 28px;
            font-weight: 700;
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.3);
        }

        h1 {
            text-align: center;
            color: #111827;
            font-size: 29px;
            margin-bottom: 10px;
            letter-spacing: -0.7px;
        }

        .subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 21px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
        }

        .input-wrapper {
            position: relative;
        }

        input {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #d1d5db;
            border-radius: 11px;
            outline: none;
            background: #f9fafb;
            font-size: 15px;
            color: #111827;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus {
            border-color: #6366f1;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12);
        }

        input::placeholder {
            color: #9ca3af;
        }

        .password-input {
            padding-right: 75px;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 13px;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            color: #4f46e5;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            text-align: right;
            font-size: 13px;
        }

        .forgot-password a {
            color: #4f46e5;
            font-weight: 600;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            margin-top: 7px;
            border: none;
            border-radius: 11px;
            background: linear-gradient(135deg, #2563eb, #6d28d9);
            color: white;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 8px 18px rgba(79, 70, 229, 0.22);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(79, 70, 229, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .footer-text {
            margin-top: 25px;
            text-align: center;
            font-size: 12px;
            color: #9ca3af;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 34px 24px;
                border-radius: 20px;
            }

            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <div class="background-circle circle-one"></div>
    <div class="background-circle circle-two"></div>

    <main class="login-card">

        <div class="brand-icon" aria-hidden="true">L</div>

        <h1>Welcome Back Imtiyaz!</h1>
        <p class="subtitle">
            Sign in to continue to your account.
        </p>

        <form action="login.php" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    autocomplete="username"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <div class="input-wrapper">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="password-input"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        required
                    >

                    <button
                        type="button"
                        class="toggle-password"
                        id="togglePassword"
                        aria-controls="password"
                        aria-pressed="false"
                    >
                        Show
                    </button>
                </div>

                <div class="forgot-password">
                    <a href="forgot-password.php">Forgot Password?</a>
                </div>
            </div>

            <button type="submit" class="submit-btn">
                Sign In &rarr;
            </button>

        </form>

        <p class="footer-text">
            &copy; 2026 Your Application. All rights reserved.
        </p>

    </main>

    <script>
        const passwordInput = document.getElementById("password");
        const toggleButton = document.getElementById("togglePassword");

        toggleButton.addEventListener("click", function () {
            const isPassword = passwordInput.type === "password";

            passwordInput.type = isPassword ? "text" : "password";
            toggleButton.textContent = isPassword ? "Hide" : "Show";
            toggleButton.setAttribute("aria-pressed", String(isPassword));
        });
    </script>

</body>
</html>