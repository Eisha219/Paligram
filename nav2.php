<style>


   .navbar-linking  .nav-item:last-child {
      margin-right: 0;
    }

  .navbar-linking  .nav-link {
      color: #333;
      transition: color 0.5s ease;
      font-size: 14px;
      text-transform: uppercase;
      border-bottom: 2px solid transparent;
    }

    .navbar-linking .nav-link:hover {
      color:#7c0a02;
      border-bottom-color: #7c0a02;
    }
   .navbar-nav {
      margin: 0 auto;
    }


    /* Search Bar */
    .search-bar {
      display: flex;
      margin-top: 0!important;
      align-items: center;
      justify-content: end;
    }

</style>

<?php
include('loader.php');
?>

<!------------------------- Navbar section start----------------- -->
<section class="">

<nav class="navbar navbar-expand-lg ">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <img src="./Assets/images/logo.svg" alt="Logo" width="100" height="50">
    </a>
  <!-- Toggler/collapsible Button -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Centered Navigation Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav navbar-linking mx-auto" id="navbarNav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">link2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">link3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">link4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">link5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">link6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">link7</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">link8</a>
      </li>
    </ul>
     <!-- Social Icons -->
     <div class="social-icons social-icons-medium">
      <ul class="navbar-nav">
        <li class="nav-item mb-sm-2 mb-lg-0">
          <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="nav-item mb-sm-2 mb-lg-0">
          <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
    </div>


   
  </div>
</nav>

<!-- Search Bar -->
<div class="container topbar">
  <div class="row">
    <div class="me-auto ml-auto">
      <div class="search-bar">
        <input type="text" placeholder="Search...">
        <span class="search-icon">
        <i class="fa fa-search"></i></span>
      </div>
    </div>
  </div>
</div>
</section>


