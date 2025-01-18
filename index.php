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
    $category_url = $_GET['category'] ?? '';

    if (isset($_GET['signup']) && !isset($_SESSION['user']['islogin'])) {
        include('./client/signup.php');

    }else if (isset($_GET['login']) && !isset($_SESSION['user']['islogin'])) {
        include('./client/login.php');

    }else if(isset($_GET['askQue'])&& isset($_SESSION['user']['islogin'])){
        include('./client/askQuestion.php');

    }else if(isset($_GET['q-id'])){
        $qid = $_GET['q-id'];
        include('./client/question-details.php');

    }else if(isset($_GET['myQue'])&& isset($_SESSION['user']['islogin'])){
        include('./client/my-question-details.php');

    }else if(isset($_GET['latest']) || isset($_GET['latest/category'])){
        $latest_category_url = $_GET['latest/category'] ?? '';
        include('./client/latest-question.php');
        
    }else {
            $search = $_GET['search_input'] ?? '';
        include('./client/questions.php');
    }
    ?>

</body>

</html>