<?php
session_start();
include './assets/pages/_connection.php';

$loginError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailOrPhone = $_POST['email_phone'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE (email = ? OR phone = ?) AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $emailOrPhone, $emailOrPhone, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_type'] = $user['user_type'];
        header("Location: ./");
        exit();
    } else {
        $loginError = "Invalid email/phone or password.";
    }
}
?>
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
            <?php if ($loginError): ?>
            <div class="alert alert-danger" role="alert">
                <?= $loginError ?>
            </div>
            <?php endif; ?>

            <form method="POST">
                <div class="mb-3">
                    <input type="text" name="email_phone" class="form-control" placeholder="Email or Phone Number"
                        required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-login">Log In</button>
                <a href="#" class="forgot-password">Forget Password?</a>
            </form>

        </div>
    </div>
    <?php include "./assets/pages/footer.php"?>
</body>

</html>