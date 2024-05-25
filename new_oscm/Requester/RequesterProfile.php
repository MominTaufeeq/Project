<?php
define('TITLE', 'Requester Profile');
define('PAGE', 'RequesterProfile');
include('includes/header.php'); 
include('../dbConnection.php');
 session_start();
 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
 } else {
  echo "<script> location.href='RequesterLogin.php'; </script>";
 }

 $sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$rEmail'";
 $result = $conn->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $rName = $row["r_name"]; }

 if(isset($_REQUEST['nameupdate'])){
  if(($_REQUEST['rName'] == "")){
   // msg displayed if required field missing
   $error[]='Fill the Field';
   } else {
   $rName = $_REQUEST["rName"];
   $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";
   if($conn->query($sql) == TRUE){
   // below msg display on form submit success
   $error[]=' Updated Successfully ';
   } else {
   // below msg display on form submit failed
   $error[]='Unable to Update';
      }
    }
   }
?>
<head>
<link rel="stylesheet" href="../css/custom.css">
  </head>
<div class="form-container col-sm-6 mt-5">

  <form class="mx-5" method="POST">
  <?php 
        
        if (isset($error)) {
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        
        ?>
    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>" readonly>
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="rName" value=" <?php echo $rName; ?>">
    </div>
    <button type="submit" class="btn btn-dark" name="nameupdate">Update</button>
  </form>
</div>
</div>
</div>
<?php
include('includes/footer.php'); 
?>