<?php
require("configs/db.php");
?>
  <!DOCTYPE html>
<html lang="en">

<head>
   <title>Elit Photography&mdash; Onepage Website Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900|Oswald:400,700" rel="stylesheet">
   <link rel="stylesheet" href="fonts/icomoon/style.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/jquery-ui.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="stylesheet" href="css/bootstrap-datepicker.css">
   <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
   <link rel="stylesheet" href="css/aos.css">
   <link rel="stylesheet" href="css/fancybox.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
 <body style="background-image: url(./images/fon3.png); width: 100%;">

        
<?php
    if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
      echo '<a href="logout.php">Logout</a>';
    }else
    if(isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null) {
      echo '<a href="logout.php">Logout</a>';
    }else{
  ?>
    <a href="../register.php" class="btn btn-md justify-content-evenly " >
    Registr
  </a>
  <a href="../login.php"  class="btn btn-md justify-content-evenly ">
    Login
  </a>
  <?php  
    }
?>


<?php
  require("partials/footer.php");
?>







