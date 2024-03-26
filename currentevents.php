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
    top: 71%;
    background-color: #fff;
    opacity: 0.5;
    font-weight: 700;
    
 }
 .border-dark {
  height: 50vh!important;
  position:absolute;
  left: -70%;

}
.image-dark{
    opacity: 0.7!important;
}
.miko{
    font-weight: 900!important;
}
.image-green{
    opacity: 0.8!important;
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
<!-- categories section  -->
<div class="container mt-4 jewish currentevents">
  <div class="row">
    <!-- Left Side Content -->
    <div class="col-lg-4 debunked-categories  pt-4  mt-3">     
    <div class="row justify-content-center " >
        <!-- <div class="d-flex justify-content-between">  -->
        <div class=" card-design mb-3 "  >
        <img src="./Assets/images/Home/Redbox1.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <span class="text-dark fw-bold ">S croll</span>

        <h2 class="text-center card-content"><a href="history.php" class="section-subtitle">House Demolitions</a></h2>
        </div>  
     <!-- </div> -->
       
        <div class=" card-design mb-3" >
        <img src="./Assets/images/Home/Redbox2.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content "><a href="numbers.php" class="section-subtitle">Excavations</a></h2>
        </div>   
        <div class=" card-design mb-3" >
        <img src="./Assets/images/Home/Redbox3.jpg" class="img-fluid h-100 card-img" alt="Banner Image">
        <h2 class="text-center card-content"><a href="debunked.php" class="section-subtitle">MSAFER YATTA</a></h2>
        </div>   
    

    </div>
    </div>

    <!-- Right Side Content -->
    <div class="col-lg-8 mx-auto mt-3 pt-4">
    <div class="row mx-4">
      <div class="events-bg" style="">
      <div class="text-content">
      <p class="mb-2">In the 4th century, as the Roman Empire transitioned to Christianity, Palestine became a center of Christianity,
         attracting pilgrims, monks and scholars. Following the Muslim conquest of the Levant in 636–641, 
         several Muslim ruling dynasties succeeded each other as they wrestled control of Palestine: the Rashiduns; 
         the Umayyads, who built the Dome of the Rock and the al-Aqsa Mosque in Jerusalem; the Abbasids; 
         the semi-independent Tulunids and the Ikhshidids; the Fatimids; and the Seljuks. In 1099,
          the Crusaders established the Kingdom of Jerusalem in Palestine, which the Ayyubid Sultanate
           reconquered in 1187. Following the invasion of the Mongol Empire in the late 1250s, the Egyptian            Mamluks reunified Palestine under its control before the Ottoman Empire conquered the region in 1516 and ruled it as Ottoman Syria largely undisrupted through to the 20th century.</p>
      <p class="mb-2">During World War I the British government issued the Balfour Declaration, favoring the establishment of a national home for the Jewish people in Palestine. The British captured Palestine from the Ottomans shortly thereafter. The League of Nations gave Britain mandatory power over Palestine in 1922. British colonial rule and Arab efforts to prevent Jewish migration into Palestine led to growing sectarian violence between Arabs and Jews, eventually causing the British government to announce its intention to terminate the Mandate in 1947. The United Nations General Assembly recommended partitioning Palestine into two states; one Arab and one Jewish. However, the situation in Palestine had deteriorated into a civil war between Arabs and Jews. The Arabs rejected the Partition Plan, the Jews ostensibly accepted it, declaring the independence of the State of Israel in May 1948 upon the termination of the British mandate. Nearby Arab countries invaded Palestine, but Israel not only prevailed but also conquered far more territory of the Mandate than envisioned by the Partition Plan. During the war, 700,000, or about 80% of all Palestinians fled or were driven out of the territory that Israel conquered, and were not allowed to return, in an event that became known as the Nakba ("Catastrophe") to the Palestinians. Starting in the late 1940s and continuing for decades thereafter, 
        about 850,000 Jews from the Arab world immigrated ("made Aliyah") to Israel.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptatum mollitia aperiam praesentium eligendi id impedit animi voluptatibus non, at quibusdam optio maxime rem iusto eaque aspernatur sed, earum asperiores.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati aut a esse minima quisquam ea tempore veniam, velit dolores alias iste, magni voluptatum eius ipsa maiores expedita accusamus mollitia nisi.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere maxime sunt ipsa? Quae odio facere quod consequuntur numquam ipsa nulla laudantium impedit dolorum consectetur quaerat minima, fuga consequatur aliquam vel!</p>
      </div>
      </div>

</div>
 </div>

  </div>
</div>
</section>

<!-- reference pages section  -->

<section>
<div class="container bg-image">
  <div class="row justify-content-center">
    <div class="col-md-3 col-sm-6 mt-sm-4 mt-sm-2   ">
      <div class="page-links ms-3">
        <div class="text-start">
        <h3 class="section-subtitle">Jewish voices</h3>
                <span class="heading-border-bottom"></span>
             <ul >
                    <li class="mb-2"><a href="" class="text-white">www.JVF.com</a></li>
                    <li class="mb-2"><a href="" class="text-white">www.Nomad.com</a></li>
                    <li class="mb-2"><a href="" class="text-white">www.Mikopeled.Com</a></li>
                    <li class="mb-2"><a href="" class="text-white">www.ilenpepe.Com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 mt-sm-4 vertical-line mt-sm-2   ">
      <div class="page-links ms-3">
        <div class="text-start">
        <h3 class="section-subtitle">Palestinian Sources</h3>
                <span class="heading-border-bottom"></span>
                <ul >
                    <li class="mb-2"><a href="" class="text-white">eye on plaestines</a></li>
                    <li class="mb-2"><a href="" class="text-white">plaestine pixel</a></li>
                    <li class="mb-2"><a href="" class="text-white">Shuhada Gaza</a></li>
                    <li class="mb-2"><a href="" class="text-white">Falistiniat</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 mt-sm-4 vertical-line   ">
      <div class="page-links ms-3">
        <div class="text-start">
        <h3 class="section-subtitle">Law Reference</h3>
                <span class="heading-border-bottom"></span>
                <ul >
                    <li class="mb-2"><a href="" class="text-white">UN</a></li>
                    <li class="mb-2"><a href="" class="text-white">ICJ</a></li>
                    <li class="mb-2"><a href="" class="text-white">Legistltaion</a></li>
                 
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 mt-sm-4 vertical-line   ">
      <div class="page-links ms-3">
        <div class="text-start">
        <h3 class="section-subtitle">BDS links</h3>
                <span class="heading-border-bottom"></span>
                <ul >
                    <li class="mb-2"><a href="" class="text-white">The witness list</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!------------- footer section start---------- -->


<footer class=" text-dark py-4">
  <div class="container ">
    <div class="row  justify-content-center">
      <div class="col-md-2 mb-3 mt-5 mx-2">
       <img src="./Assets/images/logo.svg" alt="">
      </div>
      <div class="col-md-2 mt-2 ">
        <h5>Useful Links</h5>
        <ul class="list-unstyled">
          <li><a href="history.php" >Know the History</a></li>
          <li><a href="numbers.php">Not Just Numbers</a></li>
          <li><a href="debunked.php">Debunked</a></li>
          <li><a href="jewish.php">Jewish Voices & Testimonials</a></li>
          <li><a href="currentevents.php">Current Events</a></li>
        </ul>
      </div>
      <div class="col-md-2 mt-2">
        <h5>Useful Links</h5>
        <ul class="list-unstyled">
          <li><a href="boycott.php">Boycott Divestment Sanctions</a></li>
          <li><a href="numbers.php">Law Essentials</a></li>
          <li><a href="recommended.php">Recommended Reading</a></li>
          <li><a href="stats.php">Stats</a></li>
        
        </ul>
      </div>
      <div class="col-md-2 mt-2">
        <h5>Social</h5>
       <div class="mx-auto d-flex mb-3 social-icons">
     <a href="" class=" icon-color"><i class="fab fa-facebook"></i></a>
    <a href="" class=" icon-color"> <i class="fab fa-twitter"></i></a>
    <a href="" class=" icon-color"> <i class="fab fa-instagram"></i> </a> 
        </div>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </div>
    
  </div>
  <div class="container-fluid">
  <div class="row  copyright">
      <div class="col-12 text-center">
        <p>&copy; 2024 Paligram. All rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>





</body>
</html>