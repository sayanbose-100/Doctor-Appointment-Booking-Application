<?php
    require 'connection.php';
    $db = Amwell::connect();
    require 'entities/appointments.php';

    $appointment = new Appointment($db);

    $appointment_id = $_POST['appointment_id'];

    $appointment -> deleteAppointment($appointment_id);
    header("Location: user_profile.php");
?>