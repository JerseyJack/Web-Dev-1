<!-- A page that WordPress will redirect the user too if they input an invalid URL and will prompt the user to return to home-->
<!-- Add in the header at the top of the page -->
<?php
  include "header.php";
?>

<!-- Main container -->
<div id="error">
  <!-- Title -->
  <h1>Error 404</h1>
  <!-- Subtitle -->
  <h3>Unfortunately, this page does not exsit.</h3>
  <!-- Image of robot -->
  <img style="height: 210px; width: 230px;" src="http://127.0.0.1/wp-content/themes/assignmenttheme/image/404.png" />
  <br>
  <!-- Return to home button -->
  <a href="https://localhost/" class="btn btn-light rounded-pill">Return to Home</a>
</div>

<!-- Include footer at the bottom of the page -->
<?php
  include "footer.php";
 ?>
