<?php
    require 'connection.php';
    $db = Amwell::connect();
    require 'entities/doctor.php';
    $doctor = new Doctor($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Doctors</title>
    <link rel="stylesheet" href="styles/findDoctors.css">
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
                <?php if(array_key_exists('username',$_SESSION)) { ?>
                    <li><a href="user_profile.php">Profile</a></li>
                <?php } else { ?>
                    <li><a href="login.php">Login</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <h1 style="text-align:center;">Search Doctors</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <div class="form-fields mt-5">
                <input class="form-control mb-3" type="text" placeholder="Name" name="doc_name" aria-label="default input example" id="doc_name">

                <input class="form-control" type="text" placeholder="Speciality" aria-label="default input example" name="speciality" id="speciality">
            </div>
            <div class="mt-4 mb-4 form-btn">
                <button class="btn btn-primary" id="search" type="submit" name="search">Search</button>
                <button class="btn btn-primary" type="submit" name="showAll_docs">Show All Doctors</button>  
            </div>
        </form>

        <div class="doctors-container">
          <?php
            if(isset($_GET['search'])) {
                if(isset($_GET['doc_name'])) {
                    if(isset($_GET['speciality'])) {
                        $doctorByname = $doctor -> getDoctorByName($_GET['doc_name'], $_GET['speciality']);    
                    }
                    else {
                        $doctorByname = $doctor -> getDoctorByName($_GET['doc_name']);
                    }
                    if($doctorByname == null) echo "<h1>No Doctor found</h2>";
                    else {
                        foreach ($doctorByname as $index => $doctor):
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
                                        <button class='btn btn-success' id='book-btn' type='submit' name='book-btn'>Book Now</button>
                                    </form>
                                </div>";
                        endforeach;
                    }
                }
                else {
                    echo "<h2>Please enter a name to search</h2>";
                }
            }
            if(isset($_GET["showAll_docs"])) {
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
                        <button class='btn btn-success' id='book-btn' type='submit' name='book-btn'>Book Now</button>
                    </form>
                    </div>";
                endforeach;
            }
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