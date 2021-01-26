<?php
/*
 * Template Name: About Us Template
 * Template Post Type: page
 */
?>
<!-- About Us Page -->
<!-- Add in the header at the top of the page -->
<?php
  include "header.php";
?>

<!-- Page title container -->
<div class="container-fluid mx-auto" id="title">
  <!-- Get the title of the page (in this case just About Us) -->
  <h1>
    <?php echo the_title()  ?>
  </h1>
</div>

<!-- Main div container -->
<div class="container-fluid mx-auto" id="contain">
  <!-- A div that displays the out mission section which consists of a header and paragraph -->
  <div id="mission">
    <h4> Our Mission </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis ligula a dui commodo iaculis. Nunc vehicula malesuada est. Suspendisse ut rhoncus velit, et blandit ipsum. Nullam ultrices lobortis elit, eget rhoncus felis volutpat sed. Duis sit amet aliquet risus. Suspendisse non lectus tempus, congue turpis in, aliquam massa. Praesent ac hendrerit purus.</p>
  </div>
  <!-- A single div to contain the Contact Us title above the below details -->
  <div class="container-fluid">
    <h4 style="text-align: center;"> Contact Us </h4>
  </div>
  <!-- A div that contains a list of contact detail of the company in a flex column -->
  <div class="container-fluid" id="details">

    <div class="container-fluid" id="phone-and-address">
      <!-- Phone number -->
      <div>
        <p><b>Phone Number:</b> 01202 109834</p>
      </div>
      <!-- Email -->
      <div>
        <p><b>Email Address:</b> contact-us@theempire.co.uk</p>
      </div>
      <!-- Address -->
      <div>
        <p>
          The Empire News Company<br>
          21 Peckham Hill St<br>
          London<br>
          SE15 6BN
        </p>
      </div>
      <div>
        <!-- Social media Icons -->
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-snapchat-ghost"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-reddit"></a>
      </div>
    </div>
    <!-- A div containing an embedded map from Google images that displays the location of the company -->
    <div id="map">
      <iframe class="border border-dark rounded" id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2458.9788101404133!2d-0.07290788424965937!3d51.479032679630514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487603734e804003%3A0xf7b3bd427c68b894!2s21%20Peckham%20Hill%20St%2C%20London%20SE15%206BN!5e1!3m2!1sen!2suk!4v1581546823033!5m2!1sen!2suk" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
</div>

<!-- Add in footer at the bottom of the page -->
<?php
  include "footer.php";
 ?>
