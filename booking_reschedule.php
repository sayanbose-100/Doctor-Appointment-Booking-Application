<?php
    require 'connection.php';
    $db = Amwell::connect();
    require 'entities/appointments.php';

    $appointment = new Appointment($db);

    $appointment_id = $_POST['appointment_id'];
    $appointment_date = $_POST['appointment_date'];

    $appointment -> updateAppointment($appointment_id, $appointment_date);
    header("Location: user_profile.php");
?>