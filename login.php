<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        /* background-color: #f8f9fa; */
        margin: 50px;
    }

    .login-container {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        width: 350px;
        text-align: center;
    }

    .login-container h2 {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .login-container p {
        color: #6c757d;
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 5px;
        padding: 10px;
    }

    .btn-login {
        width: 100%;
        background-color: #d9534f;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-login:hover {
        background-color: #c9302c;
    }

    .forgot-password {
        margin-top: 10px;
        display: block;
        color: #d9534f;
        text-decoration: none;
        font-size: 14px;
    }

    .forgot-password:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <?php include "./assets/pages/header.php"?>
    <div class="body">
        <div class="login-container">
            <h2>Log in to Exclusive</h2>
            <p>Enter your details below</p>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Email or Phone Number" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-login">Log In</button>
                <a href="#" class="forgot-password">Forget Password?</a>
            </form>
        </div>
    </div>
    <?php include "./assets/pages/footer.php"?>
</body>

</html>