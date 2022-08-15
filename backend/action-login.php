<?php
$emailAdmin = "admin@admin.com";
$passwordAdmin = "123";

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == $emailAdmin && $password == $passwordAdmin) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: ../frontend/dashboard.php");
} else {
    header("Location: ../frontend/login.php");
}
