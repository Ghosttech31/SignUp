<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <script src="https://kit.fontawesome.com/36bca4227c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="form">
    <h1 id="heading">Sign-Up Form</h1>
    <form name="form" action="signup.php" method="POST">
        <i class="fa-solid fa-user"></i>
        <input type="text" id="user" name="user" placeholder="Enter Username" required><br><br>
        <i class="fa-solid fa-envelope"></i>
        <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="pass" name="pass" placeholder="Create Password" required><br><br>
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="cpass" name="cpass" placeholder="Retyoe Password" required><br><br>
        <input type="submit" id="btn" value="Sign-Up" name="submit">
    </form>
  </div>
</body>
</html>