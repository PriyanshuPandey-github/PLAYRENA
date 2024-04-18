<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playrena</title>
    <link rel="stylesheet" href="styleform.css">
</head>
<body>
    <div id="error_msg"></div>
    <div class="wrapper">
        <div class="title-text">
          <div class="title login">Login Form</div>
          <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
          <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
          </div>
          <div class="form-inner">
            <form action="login.php" class="login" method="post">
              <div class="field">
                <input type="text" placeholder="Email Address" name="email" required>
              </div>
              <div class="field">
                <input type="password" placeholder="Password" name="password" required>
              </div>
              <div class="pass-link"><a href="#">Forgot password?</a></div>
              <div class="field btn">
                <div class="btn-layer"></div>
                <!-- <button type="submit">Login</button> -->
                <input type="submit" value="Login">
              </div>
              <div class="signup-link">Not a member? <a href="">Signup now</a></div>
            </form>
            <form action="register.php" class="signup" method="post" id="registration_form">
            <div class="field">
                <input type="text" placeholder="First Name" name="fname" required>
              </div>
              <div class="field">
                <input type="text" placeholder="Last Name" name="lname" required>
              </div>
              <div class="field">
                <input type="text" placeholder="Age" name="age" required>
              </div>
              <div class="field">
                <input type="text" placeholder="Email Address" name="email" required>
              </div>
              <div class="field">
                <input type="password" placeholder="Password" name="password" required>
              </div>
              <div class="field">
                <input type="password" placeholder="Confirm password"  name="repeat_password" required>
              </div>
              <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Signup">
              </div>
            </form>
          </div>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>