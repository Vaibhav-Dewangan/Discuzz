<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuzz</title>
    <?php include('./client/commonFiles.php') ?>
</head>

<body>
    <?php
    include('./client/header.php');

    if (isset($_GET['signup']) && !isset($_SESSION['user']['username'])) {
        include('./client/signup.php');

    } else if (isset($_GET['login']) && !isset($_SESSION['user']['username'])) {
        include('./client/login.php');
    }

    if(isset($_GET['askQue'])&& isset($_SESSION['user']['username'])){
        include('./client/askQuestion.php');
    }
    ?>

</body>

</html>