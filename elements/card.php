<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="styles/card.css"> -->
</head>

<body>
    <!-- Card Section -->
    <div class="card">
            <h2 class="card-title"><?php echo($_SESSION['doctor_name']);?></h2>
            <p class="card-text">
                <?php echo($_SESSION['specialization']);?><br>
                <?php echo($_SESSION['avail_days']);?><br>
                <?php echo($_SESSION['contact_number']);?><br>
                <?php echo($_SESSION['address']);?>
            </p>
    </div>
</body>

</html>
