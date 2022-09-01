   <?php
            require("configs/db.php");
            ?>
            <?php
            require("partials/header.php");
               ?>                
                
                
                    <h1>Курс: <?php echo $_GET['course_name'] ?></h1> 
                <?php
                
                 $curse = $_GET['course_name'];
                 
                $sql = " SELECT * FROM  $curse WHERE id ";
                $result = mysqli_query($conn, $sql);
                $course = mysqli_num_rows($result);
                foreach ($result as $row) {
                    
                    
                    ?>
                    <div class="accordion-wrraper">
                      <div class="accordion-item">
                          <div class="accordion-item-title"><?php echo $row['lessons_name'] ?></div>
                          <div class="accordion-item-content"><?php echo $row['description'] ?></div>
                      <div class="accordion-item-content">
            <iframe width="560" height="315" src="<?php echo $row['link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
                   
                    <?php
              }
               ?>              
  <?php
require("partials/footer.php");
?>