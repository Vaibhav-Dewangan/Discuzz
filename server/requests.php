<?php
session_start();
include('../common/db.php');
print_r($_POST);

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $conn->prepare("INSERT INTO `users`(`id`, `username`, `email`, `password`) 
    VALUES (NULL,'$username','$email','$password')");

    $result = $user->execute();

    if ($result) {
        echo 'New user registered!';
        $_SESSION["user"] = ["username" => $username, "email" => $email];
        header("location:/discuzz/?login=true");
    } else {
        echo 'User registration failed!';
    }
}

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";

    $result = $conn->query("SELECT * FROM `users` WHERE email='$email' AND password='$password'");

    if ($result->num_rows==1) {
        foreach($result as $row){
           
            $username = $row['username'];
        }
        echo ('Hi,'. $username .'Login successfull!');
        $_SESSION["user"] = ["username" => $username, "email" => $email];
        header("location:/discuzz");
    } else {
        echo 'Login failed!';
    }
}
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("location:/discuzz");
    exit();
}

