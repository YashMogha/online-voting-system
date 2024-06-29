<?php
session_start();
include("connect.php");
$name=$_POST['name'];
$password=$_POST['password'];

$check=mysqli_query($connect, "SELECT * FROM `voters` WHERE `name` LIKE '$name' AND `password` LIKE '$password' ");
if(mysqli_num_rows($check)>0){
  $userdata = mysqli_fetch_array($check);
  $_SESSION['userdata']=$userdata;


   // getting bjp records
   $bhajpa=mysqli_query($connect, "SELECT * FROM `voters` WHERE id=3 ");
   $bjp=mysqli_fetch_array($bhajpa);
   $_SESSION['bjp']=$bjp;
   // getting congress records
   $inc=mysqli_query($connect, "SELECT * FROM `voters` WHERE id=4 ");
   $congress=mysqli_fetch_array($inc);
   $_SESSION['congress']=$congress;
   // getting congress records
   $no=mysqli_query($connect, "SELECT * FROM `voters` WHERE id=5 ");
   $nota=mysqli_fetch_array($no);
   $_SESSION['nota']=$nota;
    echo '
      <script>
       window.location="../api/dashboard.php";
      </script>
     ';
  
}
else{
    echo '
    <script>
     alert("User Does not exist");
     window.location="../main/index.html";
    </script>
   ';
}

// session_end();

?>