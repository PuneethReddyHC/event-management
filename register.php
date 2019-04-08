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
  

<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
      <div class="col-md-8" id="signup_msg">
         <!--Alert from signup form-->
       </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form id="signup_form" onsubmit="return false" class="was-validated">
              <div class="form-group" >
                <input type="text " name="f_name" class="form-control field-border" placeholder="Your Name"  required>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control field-border" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" placeholder="phone" required>
              </div>
              
              <div class="col-md-12">
                <div class="row">
                  <div class="form-group col-md-6">
                    <div class="col-auto my-1">
                          <select class="custom-select mr-lg-2  field-border" id="inlineFormCustomSelect" required>
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <div class="col-auto my-1">
                          <select class="custom-select mr-lg-2 field-border" id="inlineFormCustomSelect" required>
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                  </div>
              </div>
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
  </body>  
</html>