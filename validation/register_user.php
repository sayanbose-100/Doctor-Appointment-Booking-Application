<?php
    require '../connection.php';
    $db = Amwell::connect();
    require '../entities/user.php';

    $user = new User($db);

    if(isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $mobileNo = $_POST['mobile-number'];
        $address = $_POST['address'];

        $user -> addUser($name, $email, $pass, $mobileNo, $address);
        header("Location: ../login.php");
    }
?>