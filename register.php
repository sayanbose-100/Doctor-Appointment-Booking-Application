<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Booking Signup</title>
    <link rel="stylesheet" href="styles/register_page.css" />
  </head>
  <body>
    <div class="signup-container">
      <h1>Sign Up</h1>
      <form action="validation/register_user.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div class="form-group" id="password-confirm">
          <label for="confirm-password">Confirm Password</label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            required
          />
        </div>
        <div class="form-group">
          <label for="mobile-number">Mobile No</label>
          <input type="text" id="mobile-number" name="mobile-number" required />
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" id="address" name="address" required />
        </div>
        <button type="submit" name="register" class="btn-disabled" id="submit-btn" disabled>Sign Up</button>
      </form>
      <p>
        Already have an account
        <a href="login.php">Login</a>
      </p>
    </div>

    <!-- validating the confirm password part -->
    <script>
        function checkPass(inputPass, confirmPass) {
            console.log(`${inpPass} ${confirmPass}`);
            return inputPass === confirmPass;
        }

        const inpPass = document.querySelector("#password");
        const confirmPass = document.querySelector("#confirm-password");
        const sub_btn = document.querySelector("#submit-btn");
        const pass_div = document.querySelector("#password-confirm");
        let textNode = document.createElement('p');
        textNode.style.fontSize = "13px";
        let entered_pass;

        inpPass.addEventListener('change', (e) => {
            entered_pass = e.target.value;
        })

        confirmPass.addEventListener('input', (e) => {
            if(!checkPass(entered_pass, e.target.value)) {
                textNode.textContent = 'Passwords do not match';
                textNode.style.color = "red";
                sub_btn.disabled = true;
                sub_btn.classList.remove("btn");
                sub_btn.classList.add("btn-disabled");
            }
            else {
                textNode.textContent = "Passwords match";
                textNode.style.color = "green";
                sub_btn.disabled = false;
                sub_btn.classList.remove("btn-disabled");
                sub_btn.classList.add("btn");
            }
        })
        pass_div.appendChild(textNode);
    </script>
  </body>
</html>
