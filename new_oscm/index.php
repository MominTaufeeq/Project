<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
 
 </head>
 <style>
.h{
    font-family: "Poppins", sans-serif;
}
.h-font{
    font-family: "Kalam", cursive;
}
.card{
  transition: all 0.3s;
}
.card:hover{
  transform:scale(1.15);
}

</style>


<body>
  <!-- Start Navigation -->
  
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class=" card navbar-brand border-0 fw-bold fs-3 h-font me-2" href="#">OSMS</a>
    <span class="navbar-text text-color-white me-5 ">For Home Appliances</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse h-font-mini fw-bold " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class=" card border-0">
          <a class=" nav-link" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class=" card border-0 nav-item">
          <a class="nav-link" href="service.php">SERVICES</a>
        </li>
        <li class=" card border-0 nav-item">
          <a class="nav-link" href="about.php">ABOUT US</a>
        </li>
        <li class=" card border-0 nav-item">
          <a class="nav-link" href="contactform.php">CONTACT US</a>
        </li>
    
      
      </ul>
      <div class="d-flex">
        <a href="Requester/RequesterLogin.php">
      <button type="button"name="submit" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
        LOGIN
      </button></a>
      <a href="#registration">
        <button type="button"name="submit" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
          REGISTER
        </button></a>
    </div>
  </div>
  </div>
</nav>
<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
          
          </div>
        </div>
      </div>
      <div class="swiper swiper-container">
          <div class="swiper-wrapper">
     <div class="swiper-slide">
            <img src="images/b.jpg"class="h-10 w-100 d-block" >
          </div>
          <div class="swiper-slide">
            <img src="images/6.jpg"class=" ps-0 h-10 w-100 d-block" >
          </div>
          <div class="swiper-slide">
            <img src="images/img2.jpg"class="  ps-0 h-100 w-100 d-block" >
          </div>
          <div class="swiper-slide">
            <img src="images/tech.jpg"class="  ps-0 h-100 w-100 d-block">
          </div>
          </div>
          </div>
<!-- End Navigation -->

  <!-- Start Registration  -->
  <?php include('UserRegistration.php') ?>
  <!-- End Registration  -->
  <div class="container">
    <h2 class="  text-center  fw-bold fs-1 h-font my-3"><hr>OUR FEATURES<hr> </h2>

    <div class="row">
      <div class="col-lg-4 col-md-6 my-4">
        <div class="card border-0 shadow:none " style="max-width: 0px; margin: auto;"></div>
     <img src="images/1.jpg" class=" card card-img-top px-lg- ps-0">
     <div class="card-body">
      <h3 class="card-title text-center"> BEST ENGINEERS</h3>
     </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow-none" style="max-width: 350px; margin: auto;">
     <img src="images/3.jpeg" class="card-img-top px-lg-3 ps-6">
     <div class="card-body">
    
      <h4 class="card-title text-center"> BEST TOOLS</h4>
     </div>
      </div>

    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow-none" style="max-width: 350px; margin: auto;">
   <img src="images/8.jpg" class="card-img-top  px-lg-3 ps-8">
   <div class="card-body">
    <h4 class="card-title text-center"> BEST SERVICE</h4>
   </div>
    </div>
    </div>

  </div>
    </div>

  </div>

 
  
          <div class="container">
          <hr><h2 class="mt-5 pt-0 mb-4 text-center fw-bold h-font">REACH US</h2><hr>
          <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3">
            <!-- <iframe height="320px"  class="w-100 ps-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230660.86924127114!2d81.80158454999999!3d25.40226375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1709736369210!5m2!1sen!2sin" loading="lazy" ></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60250.70109168689!2d73.01902477036866!3d19.2967631909752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7bd79fc73bda5%3A0xd6fb0fcfbb8d1784!2sShop%20No%2001%2C%20Service%20Center%2C%20Alla%20Masjid%20Punjabi%20Compound%2C%20Saira%20Apt%2C%20Kaneri%2C%20Bhiwandi%2C%20Maharashtra!3m2!1d19.2966868!2d73.06022469999999!5e0!3m2!1sen!2sin!4v1715057619862!5m2!1sen!2sin" width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 ps-0"></iframe>
            </div>
          
          <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>call us</h5>
            <a href="tel : +222222222" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+9184463082693</a>
          
       <br>
      
            <a href="tel : +222222222" class="d-inline-block  text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+918946008663</a>
          </div>
          <div class="bg-white p-4 rounded mb-4">
            <h5>follow us</h5>
            <a href="https://twitter.com/" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1s"></i> 
            TWITTER</span></a>
       <br>
       <a href="https://instagram.com/" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram"></i>
          INSTAGRAM</span></a>
          <br>
          <a href="https://facebook.com/" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook"></i>
             FACEBOOK</span></a>
           </div>
           </div>
          </div>
        </div>

          <?php include('footer.php')?>
<h6 class="text-center bg-dark text-white p-3">Designed and Developed by <a href="Admin/login.php" class="text-white text-decoration-none">@Copyright 2024 OSMS</a></h6>


  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>