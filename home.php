<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banner Section</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for banner section */
    .banner-section {
      background-color: red; /* Change this as needed */
      /* padding: 50px 0; */
      height: 100%;
    }

    .banner-section .image-container {
      position: relative;
      height: 80vh;
      object-fit: contain;
    }


    .banner-section .carousel-item img {
      object-fit: cover;
      transform: scale(3); 
      height: 100%;
      filter: brightness(50%); 
    }
    .banner-section .carousel-item {
      height: auto; 
    }

    .carousel-control-prev, .carousel-control-next {
      background-color: #ffffff!important; /* White background for carousel controls */
      color: red;
    }
  </style>
</head>
<body>

<div class="container banner-section">
  <div class="row align-items-center">
    <div class="col-md-4">
      <div class="image-container">
        <img src="./Assets/images/Home/Redbox1.jpg" class="img-fluid" alt="Left Image">
      </div>
    </div>
    <div class="col-md-8">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./Assets/images/banner-1.jpg" class="d-block w-100" alt="Carousel Image 1">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Assets/images/banner-1.jpg" class="d-block w-100" alt="Carousel Image 2">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Assets/images/banner-1.jpg" class="d-block w-100" alt="Carousel Image 3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
