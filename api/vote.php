<?php
session_start();
include("connect.php");
$id=$_POST['partyid'];
$votes=$_POST['partyvotes'];
$newvotes=$votes+1;
$user=$_SESSION['userdata'];
$uid=$_SESSION['userdata']['id'];
 

if ($user['status']==0) {
  $updatevotes=mysqli_query($connect, "UPDATE `voters` SET `votes` = '$newvotes' WHERE `voters`.`id` = $id");
  $updatestatus=mysqli_query($connect, "UPDATE `voters` SET `status` = 1 WHERE `voters`.`id` = $uid ");

if ($updatestatus and $updatevotes) {
  if ($id==3) {
    // updating bjp session varable
    $bhajpa=mysqli_query($connect, "SELECT * FROM `voters` WHERE id=3 ");
    $bjp=mysqli_fetch_array($bhajpa);
    $_SESSION['bjp']=$bjp;
    $_SESSION['userdata']['status']=1;

   }
  if ($id==4) {
      // updating congress session varable
    $inc=mysqli_query($connect, "SELECT * FROM `voters` WHERE id=4 ");
    $congress=mysqli_fetch_array($inc);
    $_SESSION['congress']=$congress;
    $_SESSION['userdata']['status']=1;

  }
  if ($id==5) {
     // updating nota session varable
    $no=mysqli_query($connect, "SELECT * FROM `voters` WHERE id=5 ");
    $nota=mysqli_fetch_array($no);
    $_SESSION['nota']=$nota;
    $_SESSION['userdata']['status']=1;

  }
}
  
} else {
  echo '
    <script>
    alert("you have already voted");
    window.location="login.php";
    </script>
    ';
}

// session_end();
?>

