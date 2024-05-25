<html>

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
<body class="bg-light">
    
  <?php include('header.php');?>
 <div class="container">
    <hr><h2 class="fw-bold h-font text-center mb-5">CONTACT US <hr></h2>
    <div class="row">
        <div class="col-md-8">
            <form action=""method="post">
                <input type="text"class="form-control" name="name" placeholder="Name"><br>
                <input type="text"class="form-control" name="subject" placeholder="subject"><br>
                <input type="email"class="form-control" name="email" placeholder="Email"><br>
                <textarea class="form-control " name="message" placeholder="How can we help you?" style="height: 150px;"></textarea><br>
               <center> <input type="submit" class="btn  btn-dark align-items-center " value="Send" name="submit"></center><br><br>
            </form>
        </div>
        <div  class="col-md-4 text-center">
            <strong>Headquarter:</strong><br>
            OSMS pvt ltd,<br>
            Ashok Nagar, Ranchi<br>
            Jharkhand - 32456734<br>
            phone: +000000000<br>
            <a href="#" class="text-decoration-none" target="_blank">www.osms.cojm</a><br><br>
            <strong>Branch:</strong><br>
            OSMS pvt ltd,<br>
           New  Ashok Nagar, Delhi<br>
            Delhi - 32456734<br>
            phone: +000000000<br>
            <a href="#" class="text-decoration-none"  target="_blank">www.osms.cojm</a><br><br>
        </div>
    </div>
 </div>
 <?php include('footer.php')?>
</body>
</html>