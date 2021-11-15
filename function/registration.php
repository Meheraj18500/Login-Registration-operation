<?php

include('../include/connect.php');

$conn = connectDB();
// if ($conn->connect_error){
//     die("Connect failed" . $conn->connect_error);
// } else{
//     echo "Connected Successfully";
// }

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$password = $_POST['password'];
$con_password = $_POST['con_pass'];

// if (isset($_POST['submit'])) {
    if ($password == $con_password){
        $getEmail = "SELECT * FROM `registration` WHERE email='$email'";
        $emailCheck = mysqli_query($conn, $getEmail);
        $rowcount = mysqli_num_rows($emailCheck);
        if ($rowcount == 1) {
            session_start();
            $_SESSION['email_exist'] = "Account already exist, Please login.";
            header('location: ../registration.php');
        } else{
            $sql = "INSERT INTO `registration`(`name`, `email`, `phone`, `password`) VALUES('$name', '$email', $phone, $password)";
            mysqli_query($conn, $sql);
            session_start();
            $_SESSION['success'] = "Your Registration Successful, Please Login.";
            header('location: ../login.php');
        }
    } else{
        session_start();
        $_SESSION['confirm'] = "Password & Confirm password didn't match.";
        header('location: ../registration.php');
    }
// }
