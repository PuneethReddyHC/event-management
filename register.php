<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include "cssjs/css.php";
?>
<body>
    
  <?php
  include "includes/header.php";
  ?>
  <style>
  .field-border{
    border-radius:20px;
    
  }
  </style>
  <div class="hero-wrap js-fullheight" style="background-image: url('images/cs03.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore <br></strong> your faviourate event</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Fest starts in</p>
            <div>
            <h1 class="mb-4"  data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong id="demo"><br></strong></h1>
            
            </div>
            
            <div class="browse d-md-flex col-md-12" >
                <div class="row">
                  <?php
                  $type_query = "SELECT * FROM event_type";
                  $run_query = mysqli_query($con,$type_query);
                  
                  if(mysqli_num_rows($run_query) > 0){
                    $i=0;   
                    while($row = mysqli_fetch_array($run_query)){
                           
                      $type_id = $row["type_id"];
                      $type_title = $row["type_title"];
                      $tag_id=$i++;
                      echo "
                      <span class='d-flex justify-content-center align-items-md-center'><a href='#$tag_id' style='border-radius:20px;margin-bottom:20px;'><i class=''></i>$type_title</a></span>
                                   
                      ";
                    }
                    
                  }
                  ?>
            	
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
      <div class="col-md-8" id="signup_msg">
         <!--Alert from signup form-->
       </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form id="signup_form" onsubmit="return false" class="was-validated">
              <div class="form-group" >
                <input type="text" name="full_name" class="form-control field-border" placeholder="Your Name"  required>
              </div>
              <?php
                if ($_GET['event_id'] != ''){
                  $event_id = $_GET['event_id'];
                  echo '<input type="hidden" name="event_id" value='.$event_id.' class="form-control field-border"   required>';
                }
              ?>
              
              <div class="form-group">
                <input type="email" name="email" class="form-control field-border" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" name="mobile" placeholder="mobile" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" name="college" placeholder="college" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" name="branch" placeholder="branch" required>
              </div>
              
              <div class="form-group">
                <input  value="Register" type="submit" name="signup_button" class="btn btn-primary py-3 px-5 " required>
              </div>
            </form>
          
          </div>

          <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>





<?php
include "includes/footer.php";
?>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php
  include "cssjs/js.php";

  ?>
  <script>
 
  </script>
  </body>  
</html>