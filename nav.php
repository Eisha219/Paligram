
<?php
include('loader.php');
?>

<!------------------------- Navbar section start----------------- -->
<section>


<header class="header-wrapper">
    <div class="container social-icons">
    <div class="mx-auto d-flex justify-content-end  ">
    <a href="" class=" icon-color"><i class="fab fa-facebook"></i></a>
    <a href="" class=" icon-color"> <i class="fab fa-twitter"></i></a>
    <a href="" class=" icon-color"> <i class="fab fa-instagram"></i> </a> 
   </div>
   </div>
</header>
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
<div class="container my-4 top-navbar">
   <div class="row">
    <div class="d-flex justify-content-between align-self-center">
    <div class="home "><a href="index.php" class="text-muted"><i class="fa fa-home"></i></a></div>
    <div class="toggle ">
    <a class="text-muted" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
    <i class="fa fa-bars"></i>
    </a>

   </div>
    </div>
  </div>
</div>
<!-- // side bar  -->
<div class="side-bar-menu">
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h2 class="offcanvas-title mx-auto" id="offcanvasExampleLabel">Pali<span class="text-danger">Gram</span> </h2>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
         <nav class="navbar ">
        <div class="container-fluid">
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
          <div  id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="history.php">Know the History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="numbers.php">Not Just Numbers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="debunked.php">Debunked</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jewish.php">Jewish Voices & Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="currentevents.php">Current Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="boycott.php">Boycott Divestment Sanctions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="essentials.php">Law Essentials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recommended.php">Recommended Reading</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="stats.php">Stats</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>
</div>
  </div>
</div>
</div>

</section>


