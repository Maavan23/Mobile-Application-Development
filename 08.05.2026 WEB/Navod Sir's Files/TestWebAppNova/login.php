<!-- <?php
session_start();

// Basic PHP Logic for demonstration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // In a real app, you would validate against your database here
    if ($email === 'admin@example.com' && $password === 'password123') {
        $_SESSION['user'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Modern UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-blue: #007bff;
            --bg-light: #f8f9fa;
        }

        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        /* Left Side: Illustration */
        .illustration-side {
            flex: 1;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        
        .illustration-side img {
            max-width: 80%;
            height: auto;
        }

        /* Right Side: Form */
        .form-side {
            flex: 1;
            background-color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Background decorative circles */
        .form-side::after {
            content: "";
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .login-card {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .login-card h2 {
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }

        .login-card p {
            color: #777;
            margin-bottom: 2rem;
        }

        .input-group-text {
            background: none;
            border-right: none;
            color: #aaa;
        }

        .form-control {
            border-left: none;
            padding: 12px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #dee2e6;
        }

        .btn-login {
            background-color: var(--primary-blue);
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            width: 100%;
            margin-top: 1rem;
            transition: 0.3s;
        }

        .btn-login:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .forgot-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            text-decoration: none;
            color: #777;
            font-size: 0.9rem;
        }

        /* Mobile Responsive */
        @media (max-width: 992px) {
            .illustration-side {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="illustration-side">
        <img src="https://cdni.iconscout.com/illustration/premium/thumb/login-page-illustration-download-in-svg-png-gif-file-formats--concept-security-mobile-app-user-interface-pack-design-development-illustrations-4433871.png" alt="Login Illustration">
    </div>

    <div class="form-side">
        <div class="login-card">
            <h2>Hello!</h2>
            <p>Sign Up to Get Started</p>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger py-2" style="font-size: 0.85rem;">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-login"><a href="dashboard.php">Login</a></button>
                
                <a href="#" class="forgot-link">Forgot Password</a>
                <a href="register.php" class="forgot-link">Register</a>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>