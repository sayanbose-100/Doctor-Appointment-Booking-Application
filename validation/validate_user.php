<?php
    require '../connection.php';
    $db = Amwell::connect();
    require '../entities/user.php';
    if(isset($_POST['submit'])) {
        $uid = $_POST['username'];
        $pass = $_POST['pass'];
        $user = new User($db);
        $user_logging = $user->validateUser($uid, $pass);
        $selected_user = $user_logging[0];
        if($pass === $selected_user['pass'] && $uid === $selected_user['email']) {
            $_SESSION['username'] = $uid;
            header("Location: ../index.php");
        }
        else {
            $_SESSION['username'] = "none";
            header("Location: ../login.php");
        }
    }
?>