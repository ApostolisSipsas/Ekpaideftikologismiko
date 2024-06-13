<?php
session_start();

$conn = new mysqli("localhost", "root", "", "ekpaideftikologismiko");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if(!empty($password)){
    $stmt = $conn->prepare("UPDATE usercredentials SET password = ? WHERE username = ? ");
    $stmt->bind_param("ss",$password,$_SESSION['username']);
    $stmt->execute();

}
if(!($email==$_SESSION['email']) ){
    $stmt = $conn->prepare("UPDATE usercredentials SET email = ?  WHERE username = ? ");
    $stmt->bind_param("ss", $email, $_SESSION['username']);
    $stmt->execute();
    $_SESSION['email']=$email;
}
if (!($username == $_SESSION['username'])){
    $stmt = $conn->prepare("UPDATE usercredentials SET username = ? WHERE username = ? ");
    $stmt->bind_param("ss", $username , $_SESSION['username']);
    $stmt->execute();
    $_SESSION['username']=$username;
}



header("Location: ../profileEdidingPage.php");
exit(); 

$conn->close();
?>
