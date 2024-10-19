<?php
    require 'connection.php';
    $db = Amwell::connect();
    require 'entities/doctor.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AmWell - Doctor Booking</title>
    <link rel="stylesheet" href="styles/index.css" />
  </head>
  <body>
    <header>
      <nav>
        <div class="brand">
          <h1>AmWell</h1>
        </div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="find_doctors.php">Find Doctors</a></li>
          <li><a href="#">Buy Medicines</a></li>
          <?php if(array_key_exists('username',$_SESSION)) { ?>
          <li><a href="user_profile.php">Profile</a></li>
          <?php } else { ?>
          <li><a href="login.php">Login</a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>
    <main>
      <!-- retrieving all the doctors to display on the index page -->
      <?php
            $doctor = new Doctor($db);
            $doctors = $doctor -> getAllDoctors(); 
      ?>

      <h1 style="text-align: center">Our Doctors</h1>
      <div class="doctors-container">
        <?php
            $selected_doctors = array_slice($doctors, 0, 8);
            foreach ($selected_doctors as $index =>
                $doctor): $_SESSION['doctor_name'] = $doctor['name'];
                $_SESSION['specialization'] = $doctor['specialization']; 
                // displayingthe available doctors rn
                echo "<div class='doctor-card'>
                    <img src='doctor1.jpg' alt='Doctor 1'>
                    <h2>".$doctor['name']."</h2>
                    <p>Speciality:".$doctor['specialization']."</p>
                    </div>"; 
            endforeach; 
        ?>
      </div>
    </main>
  </body>
</html>
