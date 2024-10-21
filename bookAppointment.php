<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Appointment</title>
    <link rel="stylesheet" href="styles/bookAppointment.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="brand">
          <h1>Book Appointment</h1>
        </div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="find_doctors.php">Find Doctors</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <?php
        if(!array_key_exists('username',$_SESSION)){
          header("Location: login.php");
        }
      ?>
      <div class="appointment-history">
        <div class="doctor-info">
          <div class="profile-image">
            <img
              src="static/user_profile_pics/user.png"
              alt="Profile Picture"
            />
          </div>
          <div>
            <?php if(isset($_GET['book-btn'])) { ?>

              <h1><?php echo $_GET['doc_name']; ?></h1>
              <p>Available Days - <?php echo $_GET['days']; ?></p>
              <p>Specialization in <?php echo $_GET['specialization']; ?></p>
              <p>Contact No. - <?php echo $_GET['contact']; ?></p>
            
            <?php } ?>
          </div>
        </div>

        <form action="validation/process_booking.php" method="post">
          <input type="text" name="doctor_id" style="display: none;" value="<?php echo $_GET['doc_id']; ?>" />
          <div class="mb-3 mt-3">
            <input class="form-control" type="date" placeholder="Pick a Date" aria-label="default input example" name="date">
          </div>
          <button type="submit" class="btn btn-success" name="book-btn">Book Now</button>
        </form>

      </div>
    </main>
  </body>
</html>
