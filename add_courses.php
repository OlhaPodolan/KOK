<?php
session_start();
require("configs/db.php");
?>
<?php

 $postnik = $_COOKIE["nick_name"];
$_SESSION["course_name"] = $_POST['course_name'];
 $course_name = $_SESSION["course_name"]; 
  

  if(isset($_POST)){  
      
      $sql = "INSERT INTO  $postnik (course_name) VALUES('".$course_name."')";
      mysqli_query($conn, $sql );

// Створення таблицы з курсом для коуча
$sql = "CREATE TABLE $course_name ( `id` INT NOT NULL AUTO_INCREMENT , `lessons_name` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `link` VARCHAR(512) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL , PRIMARY KEY (`id`))" ;
mysqli_query($conn, $sql );
header("Location: /lessons.php");


  }
  ?>