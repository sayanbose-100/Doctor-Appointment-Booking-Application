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
</head>
<body>
    <header>
        <nav>
            <div class="brand">
                <h1>AmWell</h1>
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
            <div class="form-fields">
                <div class="form-group">
                    <label for="doc_name">Name</label>
                    <input type="text" id="doc_name" name="doc_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="speciality">Speciality</label>
                    <input type="text" id="speciality" name="speciality" class="form-control">
                </div>
            </div>
            
            <button class="form-btn" type="submit" name="search">Search</button>
            <button class="form-btn" type="submit" name="showAll_docs">Show All Doctors</button>
        </form>

        <div class="doctors-container">
          <?php
            if(isset($_GET['search'])) {
                if(isset($_GET['doc_name'])) {
                    $name = $_GET['doc_name'];
                    $doctorByname = $doctor -> getDoctorByName($name);
                    foreach ($doctorByname as $index => $doctor):
                        echo "<div class='doctor-card'>
                            <img src='doctor1.jpg' alt='Doctor 1'>
                            <h2>".$doctor['name']."</h2>
                            <p>Speciality:".$doctor['specialization']."</p>
                            <p>Available Days:".$doctor['days_available']."</p>
                            <p>Contact:".$doctor['contact_number']."</p>
                            <button class='bookBtn' id='book-btn'>Book Now</button>
                            </div>";
                    endforeach;
                }
                else {
                    echo "<h2> Please enter a name to search. </h2>";
                }
                
            }
            if(isset($_GET["showAll_docs"])) {
                $doctors = $doctor -> getAllDoctors();
                foreach ($doctors as $index => $doctor):
                    echo "<div class='doctor-card'>
                    <img src='doctor1.jpg' alt='Doctor 1'>
                    <h2>".$doctor['name']."</h2>
                    <p>Speciality:".$doctor['specialization']."</p>
                    <p>Available Days:".$doctor['days_available']."</p>
                    <p>Contact:".$doctor['contact_number']."</p>
                    <button class='bookBtn' id='book-btn'>Book Now</button>
                    </div>";
                endforeach;
            }
          ?>
        </div>
    </main>
    <script>
        const apt_book_btn = document.querySelector("#book-btn");
        apt_book_btn.addEventListener('click', () => {
            window.location.href = "bookAppointment.php";
        })
    </script>
</body>
</html>