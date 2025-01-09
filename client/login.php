<div class="container margin-t-5em w-50">
    <h2 class="mb-3 text-center">Login</h2>
    <form action="./server/requests.php" method="post">
        <div class="mb-3 ">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" required class="form-control" id="email" placeholder="Enter email address" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" required class="form-control" id="password" placeholder="Enter password">
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
</div>