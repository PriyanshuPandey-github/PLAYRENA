<?php 
$uid = $_POST['uid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$email = $_POST['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "playrena";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql1 = "UPDATE  users SET fname=$fname,lname=$lname,age=$age,email=$email where uid = $uid";
if($conn->query($sql1)==true)
{
    header('Location: user.php?uid=$uid');
}
else
{
    echo" SOMETHING WENT WRONG";
}
?>