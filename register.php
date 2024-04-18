<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playrena</title>
</head>
<body>
    <div id="centerbox">
    <?php
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "playrena";
    $conn = new mysqli($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong;");
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo 'Error: email already used';
    } else {
            $sql = "SELECT MAX(uid) as uid FROM users";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $uid = ((int)$row['uid']) + 1;

            $sql = "INSERT INTO users (uid,fname,lname,age,email, pass) VALUES ($uid, '$fname', '$lname', $age,'$email', '$password' )";
            if ($conn->query($sql) === TRUE) {
                $sql = "CREATE TABLE user_$uid (
                    uid INT(20) DEFAULT $uid,
                    pid VARCHAR(20),
                    price VARCHAR(10),
                    UNIQUE (pid)
                  )";
            $conn->query($sql);      
            echo 'New record created successfully';
            echo'<script>';
            echo 'setTimeout(function(){';
                echo 'window.location.href="userauth.php";';
                echo '}5000);';
            echo'</script>';
            } else {
                echo 'New record created successfully';
            echo'<script>';
            echo 'setTimeout(function(){';
                echo 'window.location.href="userauth.php";';
                echo '}5000);';
                echo'</script>';
            }
            $conn->close();
    }
?>
    <button onclick="gotologin()" type="button">Go back to Login</button>
    </div>
    <script>
        function gotologin(){
            window.location.href="userauth.php";
        }
    </script>
</body>
</html>