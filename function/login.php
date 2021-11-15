<?php

$email= $_POST['email'];
$pass = $_POST['password'];

include('../include/connect.php');
$conn = connectDB();

$sql = "SELECT * FROM `registration` WHERE email='$email' AND password='$pass'";
$result = mysqli_query($conn, $sql);

$rowcount = mysqli_num_rows($result);

If ($rowcount == 1) {
    session_start();
    $_SESSION['login'] = true;
    header('location: ../index.php');
} else{
    session_start();
    $_SESSION['error'] = "Incorrect Email or Password";
    header('location: ../login.php');
}











