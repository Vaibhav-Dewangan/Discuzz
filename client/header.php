<?php
session_start();
?>
<nav class="navbar navbar-expand-lg bg-body-light custom-navbar ">
  <div class="container-fluid">
    <img class="navbar-brand header-logo" src="./public/logo.png">
    <div class="d-none d-sm-block d-lg-none ">
    <form action="" class="d-flex ">
      <input class="form-control me-2" type="search" name="search_input" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>

    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse p-4 p-lg-0 rounded shadow mt-5 mt-lg-0 font-size navbar-collapse bg-light bg_white " id="navbarSupportedContent">
      <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="./">Home</a>
        </li>
        <?php
        if (!isset($_SESSION['user']['islogin'])) {
          if (isset($_GET['login'])) { ?>

            <li class="nav-item">
              <a class="nav-link text-primary" href="?signup=true">Signup</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link text-primary" href="?login=true">Login</a>
            </li>

        <?php }
        } ?>

        <?php
        if (isset($_SESSION['user']['islogin'])) { ?>

          <li class="nav-item">
            <a class="nav-link text-danger" href="./server/requests.php?logout=true">Logout</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-nowrap" href="?askQue=true">Ask question</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-nowrap" href="?myQue=true">My question</a>
          </li>

        <?php } ?>

        <li class="nav-item">
          <a class="nav-link text-nowrap" href="?latest=true">Latest questions</a>
        </li>
      </ul>
      <div class="d-sm-none d-lg-block">
      <form action="" class="d-flex ">
        <input class="form-control me-2" type="search" name="search_input" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
    </div>
  </div>
</nav>