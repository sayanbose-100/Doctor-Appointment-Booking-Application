

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div class="nav-container">
            <div class="logo" onClick="home()">
                <img src="static/images/stethoscope.png" alt="image_of_doctor">
                <p class="brand">AmWell</p>
            </div>

            <div class="navbar__action__btn">
                <button type="submit" class="btn" onClick="home()">
                    <div class="home-btn">
                        <img src="static/images/home.png" alt="home">
                        <p class="navbar__p">Home</p>
                    </div>
                </button>


                <?php if(array_key_exists('user',$_SESSION)) { ?>
                    <button type="submit" class="btn" onClick="profile()">
                        <div class="login-btn">
                            <img src="static/images/user.png" alt="user">
                            <p class="navbar__p">Profile</p>
                        </div>
                    </button>
                    <form action="validation/logout_user.php" method="post">
                        <button type="submit" class="btn" name="logout_btn">
                            <div class="login-btn">
                                <img src="static/images/user.png" alt="user">
                                <p class="navbar__p">Logout</p>
                            </div>
                        </button>
                    </form>
                <?php } else { ?>
                    <button type="submit" class="btn" onClick="login()">
                        <div class="login-btn">
                            <img src="static/images/user.png" alt="user">
                            <p class="navbar__p">Login</p>
                        </div>
                    </button>
                <?php }?>
                
            </div>
        </div>
    </nav>

    <script>
        function home() {
            window.location.href = "index.php"
        }

        function login() {
            window.location.href = "login.php"
        }

        function logout() {
            window.locale.href = "../validation/logout_user.php"
        }

        function profile() {
            window.location.href = "user_profile.php"
        }
    </script>
</body>

</html>