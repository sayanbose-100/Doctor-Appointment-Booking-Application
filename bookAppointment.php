<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Appointment</title>
    <link rel="stylesheet" href="styles/bookAppointment.css" />
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
      <div class="appointment-history">
        <div class="doctor-info">
          <div class="profile-image">
            <img
              src="static/user_profile_pics/profile_pic.webp"
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

        <div class="date-btn-container">
          <button type="submit" name="register" class="btn btn-date" id="date-picker-button">Pick a date</button>
          <input type="text" id="selected-date" readonly>
          <button type="submit" name="register" class="btn btn-time" id="time-picker-button">Pick time</button>
          <input type="text" id="selected-time" readonly>
          <button type="submit" name="register" class="btn btn-avail" id="submit-btn">Check Availability</button>
        </div>

      </div>
    </main>
    <script>
      const datePickerButton = document.getElementById('date-picker-button');
      const selectedDateInput = document.getElementById('selected-date');

      datePickerButton.addEventListener('click', () => {
          const currentDate = new Date();
          const year = currentDate.getFullYear();
          const month = currentDate.getMonth();
          const day = currentDate.getDate();

          const formattedDate = `${year}-${month + 1}-${day}`;
          selectedDateInput.value = formattedDate;
      });

      const timePickerButton = document.getElementById('time-picker-button');
      const selectedTimeInput = document.getElementById('selected-time');

      timePickerButton.addEventListener('click', () => {
          const currentTime = new Date();
          const hours = currentTime.getHours();
          const minutes = currentTime.getMinutes();
          const seconds = currentTime.getSeconds();

          const formattedTime = `${hours}:${minutes}:${seconds}`;
          selectedTimeInput.value = formattedTime;
      });
    </script>
  </body>
</html>
