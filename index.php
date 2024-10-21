<?php
    require 'connection.php';
    $db = Amwell::connect();
    require 'entities/doctor.php';
    require 'entities/user.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AmWell - Doctor Booking</title>
    <link rel="stylesheet" href="styles/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
          <li><a href="find_doctors.php">Find Doctors</a></li>
          <li><a href="#">Buy Medicines</a></li>
          <?php if(array_key_exists('username',$_SESSION)) {
            $user = new User($db);
            $curr_user = $user -> findById($_SESSION['username']);
            $_SESSION['uid'] = $curr_user['uid'];
          ?>
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
                    <h2>".$doctor['name']."</h2>
                    <p>Speciality:".$doctor['specialization']."</p>
                    </div>"; 
            endforeach; 
        ?>
      </div>
    </main>

    <footer>
      <div class="footer-container">

        <div class="sitemap">
            <div class="sitemap-links">
              <div id="sitemap-head">Useful Links</div>
              <div><a href="index.php">Home Page</a></div>
              <div><a href="login.php">Login</a></div>
              <div><a href="register.php">New user</a></div>
            </div>
            <div class="sitemap-links">
              <div id="sitemap-head">Utilities</div>
              <div><a href="allDoctors.php">All Doctors</a></div>
              <div><a href="find_doctors.php">Search Doctor</a></div>
              <div><a href="validation/sitemap_Profile.php">Profile</a></div>
            </div>
            <div class="sitemap-links">
              <div id="sitemap-head">Get In Touch</div>
              <div>stayhealthy@amwell.com</div>
              <div>+91-7658943293</div>
              <div>3/4 SN Roy Road, Kolkata - 700034 </div>
            </div>
        </div>

        <div class="social-media">
            <p>Connect With Us</p>
            <button type="submit" onClick="facebook()">
                <img src="./static/images/facebook.png" alt="">
            </button>
            <button type="submit" onClick="instagram()">
                <img src="./static/images/instagram.png" alt="">
            </button>
            <button type="submit" onClick="twitter()">
                <img src="./static/images/twitter.png" alt="">
            </button>
        </div>

      </div>

    </footer>
  </body>
</html>
