<?php
session_start();
include('../common/db.php');
print_r($_POST);

if (isset($_POST['signup'])) { //Signup

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $conn->prepare("INSERT INTO `users`(`id`, `username`, `email`, `password`) 
    VALUES (NULL,'$username','$email','$password')");

    $result = $user->execute();

    if ($result) {
        echo 'New user registered!';
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id"=> $user->insert_id];
        header("location:/discuzz/?login=true");
    } else {
        echo 'User registration failed!';
    }
}

if (isset($_POST['login'])) { //Login

    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id = 0;

    $result = $conn->query("SELECT * FROM `users` WHERE email='$email' AND password='$password'");

    if ($result->num_rows == 1) {
        foreach ($result as $row) {

            $username = $row['username'];
            $user_id = $row['id'];
        }
        echo ('Hi,' . $username . 'Login successfull!');
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id"=> $user_id];
        header("location:/discuzz");
    } else {
        echo 'Login failed!';
    }
}
if (isset($_GET['logout'])) { //Logout
    session_unset();
    session_destroy();
    header("location:/discuzz");
    exit();
}

if(isset($_POST['askQue'])){ //Ask Question
    $title = $_POST['title'];
    $discription = $_POST['discription'];
    $category = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];
    
    $question = $conn->prepare("INSERT INTO `questions`(`id`, `title`, `discription`, `user_id`, `category`)
    VALUES (NULL, '$title', '$discription', ' $user_id', '$category' )");

    $result = $question->execute(); 
    if($result){
        echo "Submited!";
        header("location:/discuzz");
    } else {
        echo "Not Submited!";
    }
   


}

?>