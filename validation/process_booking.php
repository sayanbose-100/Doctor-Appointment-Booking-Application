<?php
    require '../connection.php';
    $db = Amwell::connect();
    require '../entities/appointments.php';

    $appointment = new Appointment($db);

    if(isset($_POST['book-btn'])) {
        $user_id = $_SESSION['uid'];
        $doctor_id = $_POST['doctor_id'];
        $app_date = $_POST['date'];

        $appointment -> addAppointment($doctor_id, $user_id, $app_date);
        header("Location: ../user_profile.php");
    }
?>