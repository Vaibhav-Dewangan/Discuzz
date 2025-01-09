<select class="form-control" name="category" id="category">
    <option value="">Select category</option>
    <?php
    include('./common/db.php');
    $query = "SELECT * FROM `categories`";
    $result = $conn->query($query);
    if($result->num_rows>=1){
        foreach($result as $row){ 
            $name = ucfirst($row['name']);
            $id = $row['id'] ;
            echo "<option value='$id'>$name</option>";
        } 
    }
    ?>
</select>