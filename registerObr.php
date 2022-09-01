<?php
require("configs/db.php");
?>
<?php

  if(!empty($_POST)){ //якщо в нас _POST не пустий
    if(isset($_POST['nick_name']) && $_POST['nick_name'] != "" ){
      $sql = "SELECT * FROM users WHERE nick_name = '" . $_POST['nick_name'] ."'"; 
      $result = mysqli_query($conn,$sql);
      $user = mysqli_fetch_assoc($result);
    }
      var_dump($result);

      if($user != null) {
        echo  "ВВедіть інший нік!";
        header("Location: ./index.php"); 
        }else{
          $sql = "INSERT INTO `users` (`names`, `nick_name`, `email`, 
            `password`, `role`) 
          VALUES (
             '" . $_POST['names'] . "',
             '" . $_POST['nick_name'] . "',
             '" . $_POST['email'] . "',
            '" . $_POST['password'] . "', 
             '" . $_POST['role'] . "'
           )"; 
            if(mysqli_query($conn, $sql)) {
                header("Location: ./login.php"); 
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                    if(!empty($_POST['role'] == "couch") ){       
                      $postnick = "courses";
                      $course_name = $_POST["nick_name"];    
                                        
                    if(isset($_POST)){     
    
                        //створюю автоматично нову таблицю по окремим ід
                        $sql = "CREATE TABLE $course_name ( id INT NOT NULL AUTO_INCREMENT ,  course_name VARCHAR(255) NOT NULL , PRIMARY KEY (id))" ;
                        mysqli_query($conn, $sql ); 
    
                        // + nick_name в $course_name . nick_name- це назва нової таблиці
                        $sql = "INSERT INTO $postnick (nick_name) VALUES('". $course_name ."')";
                                mysqli_query($conn, $sql );      
                                     
                 }
            }
        }
          }
?>