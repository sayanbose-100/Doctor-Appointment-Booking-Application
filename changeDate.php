<?php
    require 'connection.php';
    require 'entities/appointments.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reschedule Appointment</title>
    <link rel="stylesheet" href="styles/changeDate.css">
</head>
<body>
    <main>
        <h1>Reschedule Appointment</h1>
        
        <form action="booking_reschedule.php" method="POST">
            <label for="appointment_date">New Appointment Date</label>
            <input type="date" id="appointment_date" name="appointment_date" required>
            <input type="text" style="display: none;" name="appointment_id" value="<?php echo $_POST['appointment_id']; ?>"/>
            <button type="submit">Reschedule</button>
        </form>
    </main>
</body>
</html>