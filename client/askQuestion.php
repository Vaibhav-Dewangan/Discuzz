<div class="container margin-t-5em w-50">
    <h2 class="mb-3 text-center">Ask Question</h2>
    <form action="./server/requests.php" method="post">
        <div class="mb-3 ">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" required class="form-control" id="email" placeholder="Enter title">
        </div>

        <div class="mb-3 ">
            <label for="description" class="form-label">Discription</label>
            <textarea type="text" name="description" required class="form-control" id="description" placeholder="Enter description"></textarea>
        </div>

        <div class="mb-3 ">
            <label for="category" class="form-label">Category</label>
            <?php 
            include('category.php');
            ?>
        </div>

        <button type="submit" name="askQue" class="btn btn-primary">Ask question</button>
    </form>
</div>