<?php
    require 'connection.php';
    $db = Amwell::connect();
    require 'entities/user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles/user_profile.css">
</head>
<body>
    <header>
        <h1>My Profile</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="appointment_records.php">Appointments</a></li>
                <li><a href="validation/logout_user.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <!-- Retrieving the required info about the user -->
        <?php
            $user = new User($db);
            $curr_user = $user -> findById($_SESSION['username']);
        ?>
        <div class="profile-card">
            <div class="profile-image">
            <img src="static/user_profile_pics/profile_pic.webp" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2><?php echo $curr_user['name']; ?></h2>
                <p>Email: <?php echo $curr_user['email'] ?></p>
                <p>Phone: <?php echo $curr_user['phone'] ?></p>
                <p>Address: <?php echo $curr_user['address'] ?></p>
            </div>
        </div>
        <div class="appointment-history">
            <h2>Appointment History</h2>
            <ul>
                <li>
                    <h3>Appointment with Dr. Smith</h3>
                    <p>Date: 2023-10-20</p>
                    <p>Time: 10:00 AM</p>
                </li>
                </ul>
        </div>
    </main>
</body>
</html>