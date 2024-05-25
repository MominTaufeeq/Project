<?php
define('TITLE', 'Success');
define('PAGE', 'SubmitRequest');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">OSMS</a>
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid">
  <div class="row py-5">
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'RequesterProfile') { echo 'active'; } ?>" href="RequesterProfile.php">
        <i class="fas fa-user"></i>
        Profile <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'SubmitRequest') { echo 'active'; } ?>" href="SubmitRequest.php">
        <i class="fab fa-accessible-icon"></i>
        Submit Request
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'CheckStatus') { echo 'active'; } ?>" href="CheckStatus.php">
        <i class="fas fa-align-center"></i>
        Service Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'Requesterchangepass') { echo 'active'; } ?>" href="Requesterchangepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>
   <?php
   $sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_SESSION['myid']}";
   $result = $conn->query($sql);
   if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    echo "<div class='col-sm-9 col-md-5 mt-5 form-container ml-4 '>
         <div>
    <table class='table'>
     <tbody>
      <tr>
        <th>Request ID</th>
        <td>".$row['request_id']."</td>
      </tr>
      <tr>
        <th>Name</th>
        <td>".$row['requester_name']."</td>
      </tr>
      <tr>
      <th>Email ID</th>
      <td>".$row['requester_email']."</td>
     </tr>
      <tr>
       <th>Request Info</th>
       <td>".$row['request_info']."</td>
      </tr>
      <tr>
       <th>Request Description</th>
       <td>".$row['request_desc']."</td>
      </tr>
   
      <tr>
       <td><form class='d-print-none'><input class='btn btn-dark' type='submit' value='Print' onClick='window.print()'></form></td>
     </tr>
     </tbody>
    </table></div>
    </div>
    ";
   
   
   } else {
     echo "Failed";
   }
   ?>
   
   
</div>
</div>

   <?php
include('includes/footer.php'); 
$conn->close();
?>
