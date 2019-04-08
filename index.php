
<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php 

include "cssjs/css.php";

include "includes/body.php";

include "includes/footer.php";
?>
  
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php
  include "./cssjs/js.php";
  ?>
  </body>  
</html>