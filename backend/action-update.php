<?php
    include_once("../backend/config_user.php");

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',password='$password' WHERE id=$id");
        header("Location: ../frontend/dashboard.php");
    }
