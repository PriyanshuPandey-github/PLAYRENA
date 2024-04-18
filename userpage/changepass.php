<?php 
$uid = $_POST['uid'];
$pass = $_POST['pass'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "playrena";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql1 = "UPDATE  users SET pass=$pass where uid = $uid";
if($conn->query($sql1)==true)
{
    header('Location: user.php?uid=$uid');
}
else
{
    echo" SOMETHING WENT WRONG";
}
?>