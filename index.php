<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="./public/style.css">
    <title>Discuzz</title>
</head>

<body>
    <?php
    include('./client/header.php');
    $category_url = $_GET['category'] ?? '';

    if (isset($_GET['signup']) && !isset($_SESSION['user']['islogin'])) {
        include('./client/signup.php');
    } else if (isset($_GET['login']) && !isset($_SESSION['user']['islogin'])) {
        include('./client/login.php');
    } else if (isset($_GET['askQue']) && isset($_SESSION['user']['islogin'])) {
        include('./client/askQuestion.php');
    } else if (isset($_GET['q-id'])) {
        $qid = $_GET['q-id'];
        include('./client/question-details.php');
    } else if (isset($_GET['myQue'])|| isset($_GET['myQue/category']) && isset($_SESSION['user']['islogin'])) {
        $myQue_category_url =  $_GET['myQue/category'] ?? '';
        include('./client/my-questions.php');
    } else if (isset($_GET['latest']) || isset($_GET['latest/category'])) {
        $latest_category_url = $_GET['latest/category'] ?? '';
        include('./client/latest-question.php');
    } else {
        $search = $_GET['search_input'] ?? '';
        include('./client/questions.php');
    }
    ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>