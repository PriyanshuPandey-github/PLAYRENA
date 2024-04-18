<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "playrena";
    $conn = new mysqli($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong;");
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT email FROM users WHERE email = '$email' AND pass = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      session_start();
      $_SESSION["loggedin"] = true;
      $_SESSION["name"] = $row["name"];
      $_SESSION["email"] = $row["email"];
      echo '<script>';
      echo 'sessionstarted('$_SESSION["loggedin"]','$_SESSION["name"]','$_SESSION["email"]');';
      echo '</script>';
      header('location:index.html');
      
    } else {
      echo "Invalid email or password";
    }
    $conn->close();
?>
  <script src="script.js"></script>
</body>
</html>