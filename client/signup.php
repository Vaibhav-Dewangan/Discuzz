<div class="container margin-t-5em w-50">
    <h2 class="mb-3 text-center">Signup</h2>
    <form action="./server/requests.php" method="post">
        <div class="mb-3 ">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" required class="form-control" id="email" placeholder="Enter email address" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 ">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" required class="form-control" id="username" placeholder="Enter username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" required class="form-control" id="password" placeholder="Enter password">
        </div>
        <button type="submit" name="signup" class="btn btn-primary">Singup</button>
    </form>
</div>