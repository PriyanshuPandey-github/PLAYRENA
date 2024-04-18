<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playrena</title>
    <style>
        #centerbox{
        margin: auto;
        position: relative;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    #Download{
        background-color: lightblue;
        color: black;
        border: 5px solid black;
        text-align: center;
        border-radius: 5px;
        cursor: pointer;
        text-decoration:none;
    }
    </style>
</head>
<body>
<?php 
    $username = "Admin";
    $uid = "001";
    $pid = $_POST['id'];
    $tid = $_POST['tid'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "playrena";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT tid FROM purchases where tid = '$tid'";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        echo "ALREADY USED TRANSACTION ID";
    }
    else
    {
        $sql = "INSERT INTO purchases (uid, tid, pid, uname) VALUES ('$uid','$tid','$pid','$username')";
        $conn->query($sql);
        echo "Transaction Successful! Transaction ID: $tid";
        echo "<a download class='Download' href='./img/Witcher3wildhunt.jpg'><h1>Download Game</h1></a> ";
    }

?>
    <div id="centerbox">
        <!-- <a download class="Download" href="#"><h1>Download Game</h1></a> -->
    </div>
</body>
</html>