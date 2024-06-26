<?php
define('TITLE', 'Change Password');
define('PAGE', 'Requesterchangepass');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}

 $rEmail = $_SESSION['rEmail'];
 if(isset($_REQUEST['passupdate'])){
  if(($_REQUEST['rPassword'] == "")){
   // msg displayed if required field missing
   $error[]='All Fields Required'; 
    } else {
    $sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$rEmail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
     $rPass = $_REQUEST['rPassword'];
     $sql = "UPDATE requesterlogin_tb SET r_password = '$rPass' WHERE r_email = '$rEmail'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $error[]='Updated Successfully';
      } else {
       // below msg display on form submit failed
       $error[]='Unable to Update';
      }
    }
   }
}

?>
<head>
<link rel="stylesheet" href="../css/custom.css">
</head>
<div class="col-sm-9 col-md-10">
  <div class="row">
    <div class="form-container col-sm-6">
      <form class="mt-5 mx-5" method="POST">
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
          <label for="inputnewpassword">New Password</label>
          <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-dark mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>
      </form>

    </div>

  </div>
</div>
</div>
</div>

<?php
include('includes/footer.php'); 
?>