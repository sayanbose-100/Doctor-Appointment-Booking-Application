<?php
    require 'connection.php';
    $db = Amwell::connect();
    require 'entities/user.php';
    require 'entities/appointments.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles/user_profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <p class="brand">My Profile</p>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="find_doctors.php">Book Appointments</a></li>
                <li><a href="validation/logout_user.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <!-- Retrieving the required info about the user -->
        <?php
            $user = new User($db);
            $curr_user = $user -> findById($_SESSION['username']);
            $_SESSION['uid'] = $curr_user['uid'];
        ?>
        <div class="profile-card">
            <div class="profile-image">
                <img src="static/user_profile_pics/user.png" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2><?php echo $curr_user['name'] ?></h2>
                <p>Email: <?php echo $curr_user['email'] ?></p>
                <p>Phone: <?php echo $curr_user['phone'] ?></p>
                <p>Address: <?php echo $curr_user['address'] ?></p>
            </div>
        </div>
        <div class="appointment-history">
            <h2>Recent Appointments</h2>
            <ul>
                <li>
                    <?php
                        $appointment = new Appointment($db);
                        $appointments = $appointment -> retreiveInfo($_SESSION['uid']);
                        foreach($appointments as $index => $app):
                            echo "<h3>Appointment with Dr. ".$app['name']."</h3>";
                            echo "<p>Date: ".$app['appointment_date']."</p>";
                            echo "<p>Time: ".$app['appointment_time']."</p>";
                            echo "<form action='changeDate.php' method='post'>
                                <input type='text' style='display:none;' name='appointment_id' value='".$app['app_id']."' />
                                <button type='submit' id='change-date-btn' class='btn btn-warning m-2'>Change Date</button>
                            </form>";
                            echo "<form action='cancelBooking.php' method='post'>
                                <input type='text' style='display:none;' name='appointment_id' value='".$app['app_id']."' />
                                <button type='submit' id='cancel-btn' class='btn btn-danger m-2'>Cancel Appointment</button>
                            </form>";
                        endforeach
                    ?>
                </li>
            </ul>
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