<?php
require("configs/db.php");

?>
       <?php
       session_start();
       $course_name = $_SESSION["course_name"];
       $sql = "INSERT INTO $course_name ( `lessons_name`, `description`, `link`) VALUES ('".$_POST['lessons_name']."', '".$_POST['description']."','".$_POST['link']."')";
        $result = mysqli_query($conn,$sql);
        header("Location: /lessons.php");
       ?>
  


