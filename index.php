<?php
include "db1.php";
echo "Welcome TO";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Smart Archive - Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #1e73be; /* أزرق موحد */
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        /* عنوان أعلى الصفحة */
        .page-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
        }

        /* صندوق تسجيل الدخول */
        .login-container {
            background-color: #1e73be; /* نفس اللون */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 28px;
        }

        .login-container input {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            font-size: 16px;
        }

        .login-container button {
            width: 95%;
            padding: 12px;
            background-color: #3da0f0;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-container button:hover {
            background-color: #66b3ff;
        }
    </style>
</head>
<body>

    <div class="page-title">Smart Archive</div>

    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>