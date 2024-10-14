<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action = "validation/validate_user.php" method = "post">
            <label for="username">User Email</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="pass" required>
            <button type="submit" name='submit'>Login</button>
            <?php
                if(array_key_exists('username',$_SESSION)) {
                    if($_SESSION['username'] === "none") {
                        echo "<p style='color:red;'>Invalid Credentials</p>";
                    }
                }
            ?>
        </form>
        <p>
            Dont have an account,
            <a href="register.php">Sign up</a>
        </p>
    </div>
</body>
</html>