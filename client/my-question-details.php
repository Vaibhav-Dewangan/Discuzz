<div class="container mt-5 d-flex flex-row gap-5">
    <div class="col-8">
        <h2 class="text-center">Questions</h2>
        <?php
        include('./common/db.php');
        $user_id = $_SESSION['user']['user_id'];
        $query = "SELECT * FROM `questions` WHERE user_id='$user_id'";
        $result = $conn->query($query);
        if ($result->num_rows >= 1 && !isset($_GET['category'])) {
            foreach ($result as $row) {
                $title = $row['title'];
                $description = $row['description'];
                $category = $row['category'];
                $id = $row['id'];
                echo "
            <a  href='?q-id=$id' class='text-decoration-none'>
             <div class='p-2 px-4 d-flex justify-content-between  border bg-light rounded m-3 '>
                 <h5 class=' text-black'>$title</h5>
                 <a href='./server/requests.php?delete=$id' class='btn btn-outline-danger btn-sm'>Delete</a>
             </div>
            </a>";
            }
        } else if($result->num_rows >= 1 && isset($_GET['category'])) {
            $query = "SELECT * FROM `questions` WHERE user_id='$user_id' AND category='$category_url'";
            $result = $conn->query($query);
            foreach ($result as $row) {
                $title = $row['title'];
                $description = $row['description'];
                $category = $row['category'];
                $id = $row['id'];
                echo "
            <a  href='?q-id=$id' class='text-decoration-none'>
             <div class='p-2 px-4  border bg-light rounded m-3 '>
                 <h5 class=' text-black'>$title</h5>
                   <a href='./server/requests.php?delete=$id' class='btn btn-outline-danger btn-sm'>Delete</a>
             </div>
            </a>";
            }
        } else {
            echo "
             <div class='d-flex align-items-center justify-content-center bg-light mt-3 h-75 rounded '>
                 <h5 class=' text-black text-center mt-auto mb-auto'>No question asked</h5>
             </div>";
        }
        ?>
    </div>
    <div class="col-4 ">
        <h2 class='text-center'>Category</h2>
        <?php
        include('./common/db.php');
        $query = "SELECT * FROM `categories`";
        $result = $conn->query($query);
        if ($result->num_rows >= 1) {
            foreach ($result as $row) {
                $name_url = $row['name'];
                $name = ucfirst($row['name']);
                $id = $row['id'];
                echo "
                <div class='border bg-light rounded p-1 px-4 m-3 mx-5'>
                    <a href='?category=$name_url' class='text-decoration-none'><h5 class='text-center text-primary '>$name</h5></a>
                </div>";
            }
        }
        ?>

    </div>
</div>
