<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
 .history{
    position: absolute;
    top: 50%;
    background-color: #fff;
    opacity: 0.5;
    font-weight: 700;
    
 }
 .border-dark {
  height: 155vh!important;
  position:absolute;
  left: -63.5%;

}
.image-dark{
    opacity: 0.7!important;
}
.miko{
    font-weight: 500!important;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}
.card-body .fw-bolder p{
    font-weight: 900!important;
}
.vertical-border{
    height: 155vh!important;
  position:absolute;
  left: -36.5%;
  color:#000!important;
}
</style>
<body class="background-img">

<!-------------- Navbar section start------------- -->
 <?php
 include_once 'nav.php'
?>
<!-- banner section start  -->
<section>
<div class="container  banner-section">
  <div class="row gx-3 gx-sm-0">
    <div class="col-lg-4 banner-image p-0 p-lg-0 d-sm-none d-md-none d-lg-block">
      <img src="./Assets/images/logo-white.svg" class="img-fluid px-5 w-100 mt-5" alt="Banner Image">
    </div>
    <div class="col-lg-8 p-0 p-lg-0 mt-lg-0 mt-sm-2 p-md-0 ">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="./Assets/images/banner-1.jpg" class="banner-carousel-img" alt="...">
      <div class="gradient-overlay"></div>
      <div class="carousel-caption top-0 mt-5  d-none d-md-block">
        <p class="text-uppercase ">We are here to help you Navigate through your questions about palestine.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Assets/images/banner-2.jpg" class="banner-carousel-img" alt="...">
      <div class="gradient-overlay"></div>
      <div class="carousel-caption top-0 mt-5  d-none d-md-block">
        <p class="text-uppercase ">We are here to help you Navigate through your questions about palestine.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Assets/images/banner-1.jpg" class="banner-carousel-img" alt="...">
      <div class="gradient-overlay"></div>
      <div class="carousel-caption top-0 mt-5  d-none d-md-block">
        <p class="text-uppercase ">We are here to help you Navigate through your questions about palestine.</p>
      </div>
    </div>
  </div>
  <div class="car-btn">
  <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon  " aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
    <span class="visually-hidden ">Previous</span>
  </button>
  <button class="carousel-control-next  " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  
</div>
    </div>
  </div>
</div>
<div class="container stats">
    <!-- Right Side Content -->
    <div class="col-lg-12 mx-auto">
    <div class="row mx-4">
  <!-- First Card -->
  <div class="col-lg-4 mt-3 stats-card">
    <div class="card position-relative zoom-shadow">
      <div class="image-wrapper">
        <img src="./Assets/images/testimonials/testimonials-side.png" class="card-img-top image-green" alt="Image 1">
      </div>
      <div class="card-img-overlay d-flex mt-3 justify-content-center">
        <h5 class="card-title text-white fw-bolder miko">Encvaction</h5>
      </div>
      <div class="card-body">
        <div class="fw-bolder">
            <p class="m-0">eye on palestine</p>
            <p class="m-0">eye on palestine</p>
            <p class="my-1">Shuhada Gaza</p>
            <p class="my-3">Falistiniat</p>
            <p class="my-1">legasltaion</p>
            <p class="my-1">The witness list</p>

            
        </div>
      </div>
      <div>
        <img src="./Assets/images/banner-1.jpg" alt="">
      </div>
    </div>
  </div>

  <!-- Second Card -->
  <div class="col-lg-4 mt-3 stats-card">
    <div class="card position-relative zoom-shadow">
      <div class="image-wrapper">
        <img src="./Assets/images/Home/Redbox1.jpg" class="card-img-top image-green" alt="Image 1">
      </div>
      <div class="card-img-overlay d-flex mt-3 justify-content-center">
        <h5 class="card-title text-white fw-bolder miko">MSAFFER YATTA</h5>
      </div>
      <div class="card-body">
        <div class="fw-bolder" >
            <p class="m-0">eye on palestine</p>
            <p class="m-0">eye on palestine</p>
            <p class="my-1">Shuhada Gaza</p>
            <p class="my-3">Falistiniat</p>
            <p class="my-1">legasltaion</p>
            <p class="my-1">The witness list</p>

            
        </div>
      </div>
      <div>
        <img src="./Assets/images/banner-1.jpg" alt="">
      </div>
    </div>
  </div>

  <div class=" mt-3 mx-auto border border-start-0 border-top-0 border-bottom-0 border-dark"></div> 



  <!-- 3rd Card -->
  <div class="col-lg-4 mt-3 stats-card">
    <div class="card position-relative ">
      <div class="image-wrapper">
        <img src="./Assets/images/testimonials/testimonials-side.png" class="card-img-top image-green" alt="Image 1">
      </div>
      <div class="card-img-overlay d-flex mt-3 justify-content-center">
        <h5 class="card-title text-white fw-bolder miko">House Demolitions</h5>
      </div>
      <div class="card-body">
        <div class="fw-bolder">
            <p class="m-0">eye on palestine</p>
            <p class="m-0">eye on palestine</p>
            <p class="my-1">Shuhada Gaza</p>
            <p class="my-3">Falistiniat</p>
            <p class="my-1">legasltaion</p>
            <p class="my-1">The witness list</p>

            
        </div>
      </div>
      <div>
        <img src="./Assets/images/banner-1.jpg" alt="">
      </div>
    </div>
  </div>
  <div class=" vertical-border mt-3 mx-auto border border-start-0 border-top-0 border-bottom-0 border-dark "></div> 

  <!-- 4th Card -->
  <div class="col-lg-4 mt-3 stats-card">
    <div class="card position-relative ">
      <div class="image-wrapper">
        <img src="./Assets/images/testimonials/testimonials-side.png" class="card-img-top image-green" alt="Image 1">
      </div>
      <div class="card-img-overlay d-flex mt-3 justify-content-center">
        <h5 class="card-title text-white fw-bolder miko">Encvaction</h5>
      </div>
      <div class="card-body">
        <div class="fw-bolder">
            <p class="m-0">eye on palestine</p>
            <p class="m-0">eye on palestine</p>
            <p class="my-1">Shuhada Gaza</p>
            <p class="my-3">Falistiniat</p>
            <p class="my-1">legasltaion</p>
            <p class="my-1">The witness list</p>

            
        </div>
      </div>
      <div>
        <img src="./Assets/images/banner-1.jpg" alt="">
      </div>
    </div>
  </div>
    <!-- 5th Card -->
    <div class="col-lg-4 mt-3 stats-card">
    <div class="card position-relative ">
      <div class="image-wrapper">
        <img src="./Assets/images/Home/Redbox1.jpg" class="card-img-top image-green" alt="Image 1">
      </div>
      <div class="card-img-overlay d-flex mt-3 justify-content-center">
        <h5 class="card-title text-white fw-bolder miko">MSAFFER YATTA</h5>
      </div>
      <div class="card-body">
        <div class="fw-bolder">
            <p class="m-0">eye on palestine</p>
            <p class="m-0">eye on palestine</p>
            <p class="my-1">Shuhada Gaza</p>
            <p class="my-3">Falistiniat</p>
            <p class="my-1">legasltaion</p>
            <p class="my-1">The witness list</p>

            
        </div>
      </div>
      <div>
        <img src="./Assets/images/banner-1.jpg" alt="">
      </div>
    </div>
  </div>

    <!-- 6th Card -->
    <div class="col-lg-4 mt-3 stats-card">
    <div class="card position-relative ">
      <div class="image-wrapper">
        <img src="./Assets/images/testimonials/testimonials-side.png" class="card-img-top image-green" alt="Image 1">
      </div>
      <div class="card-img-overlay d-flex mt-3 justify-content-center">
        <h5 class="card-title text-white fw-bolder miko">House Demolitions</h5>
      </div>
      <div class="card-body">
        <div class="fw-bolder">
            <p class="m-0">eye on palestine</p>
            <p class="m-0">eye on palestine</p>
            <p class="my-1">Shuhada Gaza</p>
            <p class="my-3">Falistiniat</p>
            <p class="my-1">legasltaion</p>
            <p class="my-1">The witness list</p>

            
        </div>
      </div>
      <div>
        <img src="./Assets/images/banner-1.jpg" alt="">
      </div>
    </div>
  </div>



</div>
 </div>
</div>
</section>

<!------------- footer section start---------- -->
<?php
 include_once 'footer.php'
?>







</body>
</html>