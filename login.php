<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylez.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="nav-bar">
            <nav>
              <a>FoodBear</a>
              <a href="index.php">Logo</a>
              <a href="login.php">Log In</a>
              <a href="">Register</a>
              <a href="About_Us.php">About Us</a>
              <a href="">Contact us</a>
          </nav>
      </div>
    </header>
    <div class="login-container">
        <div class="form-box">
            <h1 id = "title">Log In</h1>
            <form action="login_logic.php" id = "login-form" name="form" method = "POST">
                <div class="input-group">
                    <div class="input-field" id = "emailField">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" id = "user" placeholder="Enter username">
                    </div>
                    <div class="input-field" id = "passwordField">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id = "pass" placeholder="Enter Password">
                    </div>
                    <p>Forgot Password <a href="">Click Here</a></p>
                </div>
                <div class="btn-field">
                    <button id = "btn" value = "login" name = "submit">Login</button>
                    <!-- <input type="submit" id = "btn" value = "login" name = "submit"> -->
                </div>
            </form>
        </div>

    </div>
    
    <footer>
        <p>Elijah Rei Sabay</p>
        <p>BSCS-2</p>
    </footer>
</body>
</html>