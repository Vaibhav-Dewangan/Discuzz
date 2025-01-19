<div class="container mt-4 mt-lg-5 d-flex flex-column-reverse flex-lg-row gap-4 gap-lg-3">
    <div class="col-lg-8 mx-3 mx-lg-0">
        <h2 class="text-lg-center font-title">Questions</h2>
        <?php
        include('./common/db.php');
        $query = "SELECT * FROM `questions` ORDER BY `id` DESC";
        $result = $conn->query($query);
        if ($result->num_rows >= 1 && !isset($_GET['latest/category'])) {
            foreach ($result as $row) {
                $title = $row['title'];
                $description = $row['description'];
                $category = $row['category'];
                $id = $row['id'];
                echo "
            <a  href='?q-id=$id' class='text-decoration-none'>
             <div class='p-2 px-4  border bg-light rounded my-3 '>
                 <h5 class=' text-black font-size'>$title</h5>
             </div>
            </a>";
            }
        } else {
            $query = "SELECT * FROM `questions` WHERE category='$latest_category_url' ORDER BY `id` DESC";
            $result = $conn->query($query);
            foreach ($result as $row) {
                $title = $row['title'];
                $description = $row['description'];
                $category = $row['category'];
                $id = $row['id'];
                echo "
            <a  href='?q-id=$id' class='text-decoration-none'>
             <div class='p-2 px-4  border bg-light rounded my-3 '>
                 <h5 class=' text-black font-size'>$title</h5>
             </div>
            </a>";
            }
        }
        ?>
    </div>
    <div class="col-lg-4">
        <h2 class=' mb-3 font-title d-lg-none mx-3 '>Category</h2>
        <div class=" overflow-scroll overflow-cat mx-3 pb-2 d-flex flex-row flex-lg-column gap-2 gap-lg-0 ">
            <h2 class='text-center font-title d-none d-lg-block'>Category</h2>
            <div class='border category bg-light rounded pt-1 p-lg-2 px-4 mt-lg-2 mx-lg-2 '>
                <a href='./?latest=true' class='text-decoration-none'>
                    <h5 class=' text-primary text-lg-center font-size '>All</h5>
                </a>
            </div>
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
                <div class='border category bg-light rounded pt-1 p-lg-2 px-4 mt-lg-2 mx-lg-2'>
                    <a href='?latest/category=$name_url' class='text-decoration-none'><h5 class='text-primary text-lg-center font-size '>$name</h5></a>
                </div>";
                }
            }
            ?>
        </div>
    </div>
</div>