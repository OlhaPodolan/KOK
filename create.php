<?php
require("configs/db.php");
?>
<?php
require("partials/header.php");
?>
<section class="site-section" id="section-contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3 class="text-blue mb-5 heading">Name Curse</h3>
        <form action="add_courses.php" method="POST">          
          <div class="mb-3">            
            <input type="text" name="course_name" class="form-control" id="username" placeholder="Enter Name">
          </div>           
          <button type="submit" id="button" class="btn btn-primary btn-lg py-3 px-5 login-button">Login</button>
        </form>

      </div>
    </div>
  </div>
</section>    
  <?php
require("partials/footer.php");
?>
