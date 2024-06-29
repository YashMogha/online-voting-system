<!-- php -->
<?php
 session_start();
 if (isset($_SESSION['userdata'])) {
   $userdata=$_SESSION['userdata'];
   $bjp=$_SESSION['bjp'];
   $congress=$_SESSION['congress'];
   $nota=$_SESSION['nota'];
 }
 else{
  header('../');
 }
//  session_end();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vote</title>
     <!-- bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- my css -->
    <style>
        body{
            background-color: rgb(191, 194, 240);
        }
         #header{
         border: 3px solid;
         padding: 10px;
         font-size: 25px;
         }
    </style>
</head>
<body>
   <div class="container-fluid">
    <!-- header -->
    <div class="row">
        <div class="col-12 text-end" id="header">
           voter :  <?php echo  $userdata['name']   ?>
        </div>
    </div>
   </div>

   <!-- instruction -->
   <div class="row justify-content-center">
    <div class="col-11 col-md-8 py-3">
        <h2 class="text-center">Click on the vote button Below the party Symbol to cast your vote for your preffered option</h2>
    </div>
   </div>
   <hr>
    <!-- parties -->
   <div class="row justify-content-evenly pt-1">
    <div class="col-10 col-md-3 ">
        <div class="card" style="width: 18rem;">
            <img src="https://www.shutterstock.com/image-vector/lotus-flower-saffron-color-political-600nw-2399179289.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title ">Bhartiya Janta Party</h5>
              <form action="vote.php" method="post">
                <input type="hidden" name="partyid" value="<?php echo $bjp['id'] ?> ">
                <input type="hidden" name="partyvotes" value="<?php echo $bjp['votes'] ?> ">
                <input type="submit" value="Vote" class="btn btn-primary">
              </form>
           </div>
         </div>
    </div>
    <div class="col-10 col-md-3 ">
        <div class="card" style="width: 18rem;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Indian_National_Congress_hand_logo.svg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title ">Congress</h5>
              <form action="vote.php" method="post">
              <input type="hidden" name="partyid" value="<?php echo $congress['id'] ?> ">
                <input type="hidden" name="partyvotes" value="<?php echo $congress['votes'] ?> ">
              <input type="submit" value="Vote" class="btn btn-primary">
              </form>
            </div>
          </div>
    </div>
    <div class="col-10 col-md-3 ">
        <div class="card" style="width: 18rem;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/NOTA_Option_Logo.png/1209px-NOTA_Option_Logo.png" class="card-img-top my-3" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title ">NOTA</h5>
              <form action="vote.php" method="post">
              <input type="hidden" name="partyid" value="<?php echo $nota['id'] ?> ">
                <input type="hidden" name="partyvotes" value="<?php echo $nota['votes'] ?> ">
              <input type="submit" value="Vote" class="btn btn-primary">
              </form>
            </div>
          </div>
    </div>

   </div>
   
      
  
  
  
  
  
   
  
  
   
  
    <!-- boot js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>