<div class="container mt-5 pb-5 px-4 px-lg-5 px-xl-0 d-flex gap-xl-3 justify-content-between">
    <div class='col-xl-8 col-md-7'>
        <h2 class="font-title">Question</h2>
        <?php
        include('./common/db.php');
        $query = "SELECT * FROM `questions` WHERE id='$qid'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $description = $row['description'];
        $category = $row['category'];
        echo "
     <div class='mt-4 font-size'>
        <h5 class=' text-primary'>$title</h5>
        <p class='py-2'>$description</p>
    </div>"
        ?>
        <form class="font-size" action='./server/requests.php' method='post'>
            <input type="hidden" name="question_id" value="<?php echo $qid ?>">
            <textarea name='answer' id='answer' placeholder='Your answer' class='form-control w-75 mb-3 '></textarea>
            <button type='submit' name='answer-submit' class='btn btn-primary'>Submit Your Answer</button>
        </form>

        <h2 class="my-4 font-title">Answers</h2>
        <?php
        $query = "SELECT * FROM `answers` WHERE question_id='$qid'";
        $result = $conn->query($query);
        foreach ($result as $row) {
            $username = $row['username'];
            $answer = $row['answer'];
            echo "<div class='bg-light p-3 my-3 rounded-2 mr-xl-3'>
               <h6 class=''>$username</h6>
               <p>$answer</p>
             </div>";
        }
        ?>
    </div>
    <div class="col-lg-4 d-none d-md-block">
        <h2 class="font-title">Related questions</h2>
        <?php
        include('./common/db.php');
        $query = "SELECT * FROM `questions` WHERE category='$category'AND id!='$qid'";
        $result = $conn->query($query);
        foreach ($result as $row) {
            $title = $row['title'];
            $description = $row['description'];
            $category = $row['category'];
            $id = $row['id'];
            echo "
        <a  href='?q-id=$id' class='text-decoration-none'>
         <div class='py-2 px-4  border bg-light rounded my-3 '>
             <h5 class=' text-black font-size '>$title</h5>
         </div>
        </a>";
        }
        ?>
    </div>
</div>