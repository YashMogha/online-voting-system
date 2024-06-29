<?php
include("connect.php");
$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if ($password==$cpassword) {
   $sql= mysqli_query($connect,"INSERT INTO `voters` (`name`, `number`, `address`, `password`, `status`) VALUES ( '$name', '$number', '$address', '$password', '0')");
   if ($sql) {
    echo '
    <script>
     alert("Registration successful");
     window.location="../main/index.html";
    </script>
   ';
   } else {
    echo '
    <script>
     alert("some error occured");
     window.location="../main/register.html";
    </script>
   ';
   }
   
} 
else {
   echo '
    <script>
     alert("confirmed password does not matched");
     window.location="../main/register.html";
    </script>
   ';
}

?>