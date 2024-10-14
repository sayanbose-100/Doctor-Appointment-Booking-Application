<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles/footer.css"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
<footer>
        <div class="footer-container">
            <table>
                <tr>
                    <th>Quick Links</th>
                    <th>Support</th>
                    <th>Contact Us</th>
                    <th>Our Locations</th>
                </tr>
                <tr>
                    <td>About Us</td>
                    <td>HelpDesk</td>
                    <td>Email</td>
                    <td>Barisha</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Site Map</td>
                    <td>Phone Number</td>
                    <td>Behala</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Address</td>
                    <td>Ruby</td>
                </tr>
            </table>

            <div class="social-media">
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

    <script>
        function facebook() {
            window.open("https://www.facebook.com", "_blank");
        }
        function instagram() {
            window.open("https://www.instagram.com", "_blank");
        }
        function twitter() {
            window.open("https://www.twitter.com", "_blank");
        }
    </script>
</body>
</html>