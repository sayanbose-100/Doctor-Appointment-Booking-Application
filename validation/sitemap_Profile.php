<?php
    session_start();
    if(array_key_exists('username',$_SESSION)) {
        header("Location: ../user_profile.php");
    }
    else {
        header("Location: ../login.php");
    }
?>