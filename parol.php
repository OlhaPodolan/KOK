 <?php
            require("configs/db.php");
   ?>
            <?php
            require("partials/headerStudent.php");

            ?>
<?php
 if(!empty($_POST)){ //якщо в нас _POST не пустий
    if( isset($_POST['nick_name']) && $_POST['nick_name']  != null  ){

      $sql = "SELECT * FROM `users` WHERE nick_name = '" . $_POST['nick_name'] ."'";

      $result = mysqli_query($conn, $sql);
      $users = mysqli_fetch_assoc($result);
   
        if ( $result->num_rows == 0){
            // header("Location: ./index.php");
            echo "<h2>Введіть інший nick!</h2>";
          }else
            if($users['role'] == 'couch'){
              setcookie('nick_name',$users['nick_name'],time()+60*60*24*30, '/');
              
                header("Location: /student.php"); 

            }
            else{
             echo "<h2>Введіть інший пароль!</h2>"; 

                   
                 }                 
        } 
      }
          
?>


<section class="site-section" id="section-contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3 class="text-blue mb-5 heading">Parol Couch</h3>
        <form action="#" method="POST">          
          <div class="mb-3">
            
            <input type="text" name="nick_name" class="form-control" id="username" placeholder="Enter nick_name">
          </div>
          <button type="submit" id="button" class="btn btn-primary btn-lg py-3 px-5 login-button">Go Curse</button>
        </form>

      </div>
    </div>
  </div>
</section>  
   <?php
            require("partials/footer.php");

            ?>