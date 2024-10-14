<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Records</title>
    <!-- <link rel="stylesheet" href="styles/findDoctors.css"> -->
</head>
<body>

    <header>
        <?php require 'elements/navbar.php'; ?>
    </header>
    <div class="divider"></div>
    <main>
        <?php
            if(array_key_exists('user',$_SESSION)) {
                if($_SESSION['user'] !== "none") {
            ?>
                    <h3>This is the health records page</h3>
            <?php
                }
            }
            else {
            ?>
                <div class="record-container">
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Reason</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>23/08/2024</td>
                            <td>Ridhhi Dutta</td>
                            <td>Sayan Sen</td>
                            <td>Viral Fever</td>
                            <td>Ongoing</td>
                        </tr>
                        <tr>
                            <td>08/11/2023</td>
                            <td>Kunal Ghosh</td>
                            <td>Deepshika Sharma</td>
                            <td>Cough and Cold</td>
                            <td>Completed</td>
                        </tr>
                    </table>
                </div>

            <?php } ?>
    </main>

</body>
</html>