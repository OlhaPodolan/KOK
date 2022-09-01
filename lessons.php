<?php
require("partials/header.php");
?>

<?php
require("configs/db.php");
$course_name = $_SESSION["course_name"];
?>        
 <h1><?php echo "Додайте уроки в свій курс:  ". $course_name ?></h1>


       <section class="site-section" id="section-contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
       
        <form action="add_lessons.php" method="POST">
          <div class="mb-3">
            <label for="names" class="form-label">Lessons Name</label>
            <input type="text" name="lessons_name" class="form-control" id="username" placeholder="Enter Lessons Name">
          </div>
          <div class="mb-3">
            <label for="nick_name" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="username" placeholder="Enter description">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Link</label>
            <input type="text" name="link" class="form-control" id="username" placeholder="Enter link ">
          </div>
         
          <button type="submit" id="button" class="btn btn-primary btn-lg  py-3 px-5 login-button">Add lesson</button>
        </form>

      </div>
    </div>
  </div>
</section>
        

   

         <?php
require("partials/footer.php");
?>
