<div class="container margin-t-5em w-50">
    <h2 class="mb-3 text-center">Ask Question</h2>
    <form action="./server/requests.php" method="post">
        <div class="mb-3 ">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" required class="form-control" id="email" placeholder="Enter title">
        </div>

        <div class="mb-3 ">
            <label for="discription" class="form-label">Discription</label>
            <textarea type="text" name="discription" required class="form-control" id="discription" placeholder="Enter discription"></textarea>
        </div>

        <div class="mb-3 ">
            <label for="category" class="form-label">Category</label>
            <?php 
            include('category.php');
            ?>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">submit</button>
    </form>
</div>