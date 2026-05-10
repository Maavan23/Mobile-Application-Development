

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Modern UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary-blue: #007bff; }
        body, html { height: 100%; margin: 0; font-family: 'Segoe UI', sans-serif; }
        
        .main-container { display: flex; height: 100vh; width: 100%; }

        /* Left Side (Blue side for Register) */
        .brand-side {
            flex: 1;
            background-color: var(--primary-blue);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        /* Right Side (Form side) */
        .form-side {
            flex: 1.2;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .register-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        }

        .register-card h2 { font-weight: 700; color: #333; }
        .register-card p { color: #777; margin-bottom: 2rem; }

        .input-group-text { background: none; border-right: none; color: #aaa; }
        .form-control { border-left: none; padding: 10px; }
        .form-control:focus { box-shadow: none; border-color: #dee2e6; }

        .btn-register {
            background-color: var(--primary-blue);
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            width: 100%;
            margin-top: 1rem;
            transition: 0.3s;
        }

        .btn-register:hover { background-color: #0056b3; transform: translateY(-2px); }

        .login-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            text-decoration: none;
            color: var(--primary-blue);
            font-weight: 600;
        }

        @media (max-width: 992px) { .brand-side { display: none; } }
    </style>
</head>
<body>

<div class="main-container">
    <div class="brand-side">
        <img src="https://cdni.iconscout.com/illustration/premium/thumb/registration-form-illustration-download-in-svg-png-gif-file-formats--signup-login-user-interface-pack-design-development-illustrations-4433877.png" style="width: 70%;" alt="Register">
        <h2 class="mt-4">Join Us!</h2>
        <p>Create an account to manage your employees efficiently.</p>
    </div>

    <div class="form-side">
        <div class="register-card">
            <h2>Create Account</h2>
            <p>Fill in the details to get started</p>

         

            <form action="register.php" method="POST">
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                    </div>
                </div>

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

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-shield-halved"></i></span>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-register">Sign Up</button>
                
                <a href="login.php" class="login-link">Already have an account? Login</a>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>