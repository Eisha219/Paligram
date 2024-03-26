<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
 


.text-container  {
    font-size: 20px;
    position: absolute;
    color: #fff;
    top: 40%;
    left: 5%;
    transform: translateX(30%);
    width: 30%;
    word-spacing: 2px;

}
.recommended-card-design{
  /* display: inline-block; */
  position: relative;
  /* width: 100%;
  max-width: 250px;  */
  border-radius: 8px;
  overflow: hidden;
  margin: 8px;
  transition: transform 0.5s ease-in-out;

  
}
.recommended-card-design:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0px;
  width: 80%;
  height: 100%;
  transform: skewX(-45deg);
  transition: 0.5s ease-in-out;


}
.recommended-card-design:hover:before{
left: 450px;
background: rgba(0,0,0,0.2);


}

.recommended-card-design img {
  width: 100%;
  height: auto;
  display: block;

}


.recommended-card-design:hover {
  transform: scale(1.05);
}

.recommended-card-design .section-subtitle {
  /* opacity: 1.5; */
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.recommended-card-design:hover .section-subtitle {
  opacity: 1.5;
  transform: translateX(-50%) translateY(-20px);
  letter-spacing: 2.5px;
}
.border-dark {
  height: 155vh!important;
  position:absolute;
  left: -65%;

}
.range-container{
    width: 100%;
    height: 60vh;
    background-color: #fff;
    max-width: 300px;
    position: relative;

}

.range-container .container{
    position: relative;
    margin-top: 30px;
}
.range-container input[type="range"]{
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100%;
    outline: none;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    background-color: transparent;
    pointer-events: none;
}
.range-container .slider-track{
    width: 80%;
    height: 5px;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    border-radius: 5px;
}
.range-container .slider-track-2{
    width: 80%;
    height: 5px;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    border-radius: 5px;
}

.range-container input[type="range"]::-webkit-slider-thumb{
    -webkit-appearance: none;
    height: 1.3em;
    width: 1.3em;
    background-color: #fff;
    border: 1px solid  #3264fe;
    cursor: pointer;
    margin-top: -2px;
    pointer-events: auto;
    border-radius: 50%;
}

.range-container input[type="range"]:active::-webkit-slider-thumb{
    background-color: #ffffff;
    border: 3px solid #3264fe;
}
 .values{
    font-weight: 500;
    font-size: 25px;
    color: #000;
}
.values-range span{
    font-size: 16px;
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
    <div class="col-lg-8 p-0 p-lg-0 mt-lg-0 mt-sm-2 p-md-0">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row px-0">
          <div class="col-md-6 px-0 ">
            <img src="./Assets/images/Home/greenbox1.jpg" class="banner-carousel-img" alt="...">
            <div class="text-container">
                <p>Samih Abu jarid 18 month old, murdred by isreal on 18 july,2014</p>
         </div>
          </div>
          <div class="col-md-6 px-0">
          <img src="./Assets/images/banner-2.jpg" class="banner-carousel-img" alt="...">

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row px-0">
          <div class="col-md-6 px-0 ">
            <img src="./Assets/images/Home/greenbox1.jpg" class="banner-carousel-img" alt="...">
            <div class="text-container">
                <p>Samih Abu jarid 18 month old, murdred by isreal on 18 july,2014</p>
         </div>
          </div>
          <div class="col-md-6 px-0">
          <img src="./Assets/images/banner-2.jpg" class="banner-carousel-img" alt="...">

          </div>
        </div>
      </div>
    </div>
    <div class="car-btn">
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

  </div>
</div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
         <div class="range-container">
         <h4 class="px-4 my-4 pt-3 text-capitalize">filter</h4>

         <div class="wrapper">
        <div class="container">
            <div class="slider-track"></div>
            <input type="range" min="0" max="100" value="2" id="slider-1" oninput="slideOne()" >
            <input type="range" min="0" max="100" value="23" id="slider-2" oninput="slideTwo()">
        </div>
        <div class="values mt-5">
            <div class="values-range pt-4 px-3 d-flex justify-content-start ">
            <h6 class="text-secondary px-3 mt-1">Age</h6>
            <span id="range1"> 0 </span>
            <span> &dash; </span>
            <span id="range2"> 100</span>
            </div>
        </div>
    
        
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="slider-track-2"></div>
            <input type="range" min="0" max="100" value="2" id="slider-3" oninput="slidethree()" >
            <input type="range" min="0" max="100" value="23" id="slider-4" oninput="slidefour()">
        </div>
        <div class="values mt-5">
            <div class="values-range pt-4 px-3 d-flex justify-content-start ">
            <h6 class="text-secondary px-3 mt-1">Age</h6>
            <span id="range3"> 0 </span>
            <span> &dash; </span>
            <span id="range4"> 100</span>
            </div>
        </div>
        <div class="mt-5 text-center">        
        <a href="" class="main-btn ">Search</a>
        </div>
        
    </div>    
         </div>
         <hr class="fw-bolder ">
         <div>
            <p class="text-secondary">Website-1 Gaza Martis</p>
            <p class="text-secondary">Website-1 Shuhadra</p>

            <p class="text-secondary">Website-1 Gaza Martis</p>

         </div>
     </div>
            <div class=" mt-3 mx-auto border border-start-0 border-top-0 border-bottom-0 border-dark"></div> 

            <div class="col-md-8 ms-auto">
                    <!-- pages section  -->
<div class="container-fluid mt-4 justify-content-end px-0 recommended ">
    <div class="row justify-content-end " >
        
    <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox1.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="history.php" class="section-subtitle">Know the history</a></h2>
    </div>
    </div>
   <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">pictures</a></h2>
    </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">pictures</a></h2>
    </div>
     </div>
     <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">pictures</a></h2>
    </div>
     </div>
     <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">not just numbers</a></h2>
    </div>
     </div>
     <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">not just numbers</a></h2>
    </div>
     </div>
     <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">not just numbers</a></h2>
    </div>
     </div>
     <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">not just numbers</a></h2>
    </div>
     </div>
     <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">not just numbers</a></h2>
    </div>
     </div>
     <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">not just numbers</a></h2>
    </div>
     </div>
     <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">not just numbers</a></h2>
    </div>
     </div>
     <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
    <div class="recommended-card-design">
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="numbers.php" class="section-subtitle">not just numbers</a></h2>
    </div>
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
<script>
document.addEventListener("DOMContentLoaded", function() {
    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    let sliderThree = document.getElementById("slider-3");
    let sliderFour = document.getElementById('slider-4');
    let displayValOne = document.getElementById("range1");
    let displayValTwo = document.getElementById("range2");
    let displayValThree = document.getElementById("range3");
    let displayValFour = document.getElementById("range4");

    let minGap = 0;
    let minGap2 = 0;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = document.getElementById("slider-1").max;
    let sliderTrack2 = document.querySelector(".slider-track-2");
    let sliderMaxValue2 = document.getElementById("slider-2").max;

    let percent1, percent2, percent3, percent4;

    function slideOne() {
        if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
            sliderOne.value = parseInt(sliderTwo.value) - minGap;
        }
        displayValOne.textContent = sliderOne.value;
        fillColor();
    }

    function slideTwo() {
        if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
            sliderTwo.value = parseInt(sliderOne.value) + minGap;
        }
        displayValTwo.textContent = sliderTwo.value;
        fillColor();
    }

    function slideThree() {
        if (parseInt(sliderFour.value) - parseInt(sliderThree.value) <= minGap2) {
            sliderThree.value = parseInt(sliderFour.value) - minGap2;
        }
        displayValThree.textContent = sliderThree.value;
        fillColor2();
    }

    function slideFour() {
        if (parseInt(sliderFour.value) - parseInt(sliderThree.value) <= minGap2) {
            sliderFour.value = parseInt(sliderThree.value) + minGap2;
        }
        displayValFour.textContent = sliderFour.value;
        fillColor2();
    }

    function fillColor() {
        percent1 = (sliderOne.value / sliderMaxValue) * 100;
        percent2 = (sliderTwo.value / sliderMaxValue) * 100;
        sliderTrack.style.background = `linear-gradient(to right, #7c0a02 ${percent1}% , #7c0a02 ${percent1}% , #7c0a02 ${percent2}%, #7c0a02 ${percent2}%)`;
    }

    function fillColor2() {
        percent3 = (sliderThree.value / sliderMaxValue2) * 100;
        percent4 = (sliderFour.value / sliderMaxValue2) * 100;
        sliderTrack2.style.background = `linear-gradient(to right, #7c0a02 ${percent3}% , #7c0a02 ${percent3}% , #7c0a02 ${percent4}%, #7c0a02 ${percent4}%)`;
    }

    sliderOne.addEventListener("input", slideOne);
    sliderTwo.addEventListener("input", slideTwo);
    sliderThree.addEventListener("input", slideThree);
    sliderFour.addEventListener("input", slideFour);

    window.onload = function() {
        slideOne();
        slideTwo();
        slideThree();
        slideFour();
    };
});
</script>


</body>
</html>