               <?php
            require("configs/db.php");
            ?>
            <?php
            require("partials/header.php");
            $postnik = $_COOKIE["nick_name"];
            ?>
            

      <section>
        <div class="container-fluid">

              <div  class= "d-inline-block " class="d-inline-block d-lg-none ml-md-0 ml-auto py-3" style="position: relative; top: 3%; left: 30%;margin-block: 7%;" >
                <?php
                
                $sql = " SELECT * FROM $postnik WHERE id ";
                $result = mysqli_query($conn, $sql);
                $course = mysqli_num_rows($result);
                foreach ($result as $row) {
                    
                    
                    ?>
                    <h3><a href="lesson_list.php?course_name=<?php echo $row['course_name'];?>" class="nav-link"><?php echo $row['course_name']; ?></a></h3>
                   
                    <?php
              }
               ?>
                 
                            
             
             </div>
          
      </section>
        
           


         



  <?php
require("partials/footer.php");
?>