<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Dcotors</title>
    <link rel="stylesheet" href="styles/findDoctors.css">
</head>
<body>
<header>
      <nav>
        <div class="brand">
          <img src="static/images/stethoscope.png" alt="image_of_doctor">
          <p>AmWell</p>
        </div>
        <ul>
          <li><a href="index.php">Home</a></li>
        </ul>
      </nav>
    </header>
    <h1 style="text-align: center;">Our Doctors</h1>
    <div class="doctors-container">
    <?php
        require 'connection.php';
        $db = Amwell::connect();
        require 'entities/doctor.php';
        $doctor = new Doctor($db);

        $doctors = $doctor -> getAllDoctors();
        foreach ($doctors as $index => $doctor):
            $name = $doctor['name'];
            $specialization = $doctor['specialization'];
            $days = $doctor['days_available'];
            $contact = $doctor['contact_number'];
            $doctor_id = $doctor['doc_id'];
            echo "<div class='doctor-card'>
            <h2>".$name."</h2>
            <p>Speciality:".$specialization."</p>
            <p>Available Days:".$days."</p>
            <p>Contact:".$contact."</p>
            <form action='bookAppointment.php'>
                <input type='text' style='display: none;' name='doc_id' value='".$doctor_id."' >
                <input type='text' style='display: none;' name='doc_name' value='".$name."' >
                <input type='text' style='display: none;' name='specialization' value='".$specialization."' >
                <input type='text' style='display: none;' name='contact' value='".$contact."' >
                <input type='text' style='display: none;' name='days' value='".$days."' >
            </form>
            </div>";
        endforeach;
    ?>
    </div>
</body>
</html>

