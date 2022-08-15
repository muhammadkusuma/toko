<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    include_once("../backend/config_user.php");
    $result = mysqli_query($mysqli, "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");

    header("Location: ../index.php");
}
