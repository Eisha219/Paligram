<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
  .number-banner  .banner {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('./Assets/images/banner-2.jpg');
  background-size: 180%;
  background-position: center;
  color: #fff;
  padding: 100px 0;
  background-repeat: no-repeat;
  position: relative;
}
.heading-style{
  font-size: 2.5rem!important;
  font-weight: 800;
  text-transform:capitalize;
  margin-bottom: 0.8rem;
}
.main-btn{
    padding: 10px 30px;
    color: #fff;
    background-color: #7c0a02;
    transition: background 0.5s ease, color 0.3s ease;

}
.main-btn:hover{
    background: #fff;
    color: #7c0a02;
    border: #fff solid 1px;
}
.number-banner  .subheading-style{
 text-transform: uppercase;
 position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;

}
.captives{
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('./Assets/images/captives-bg.jpg');
    background-size: 100% 60vh;
  background-position: center;
  height: 50vh;
  color: #fff;
  background-repeat: no-repeat;
  position: relative;
}
.killed{
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('./Assets/images/captives-bg.jpg');
    background-size: 100% 60vh;
  background-position: center;
  height: 50vh;
  color: #7c0a02;
  background-repeat: no-repeat;
position: relative;

}
</style>
<body class="">

<!-------------- Navbar section start------------- -->
 <?php
 include_once 'nav2.php'
?>
<section class="number-banner">
  <div class="container-fluid ">
    <div class="banner">
    <div class="row align-items-center mx-5">
      <div class="col-lg-6">
        <h1 class="heading-style">Not JUST Numbers</h1>
        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem cumque accusamus cum fuga deleniti voluptatum, minus aperiam tempore. Eius velit,
    ?</p>
<div class="mt-4">        
<a href="#" class="main-btn ">Read More</a>
</div>
      </div>
    </div>
    </div>
  </div>
  <div class="container mt-5 pt-5 text-center">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="captives">
            <h1 class="subheading-style">Captives</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-2 text-center">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="killed">
        <h1 class="subheading-style">killed</h1>
        </div>
      </div>
    </div>
  </div>

</section>
 <?php
 include_once 'footer.php'
?>



</body>
</html>