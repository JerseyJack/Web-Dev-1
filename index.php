  <!-- Add header to the top of the page -->
  <?php
    include "header.php";
  ?>
  <!-- Add carousel before the container -->
  <?php
    include "carousel.php";
  ?>

  <!-- Main container -->
  <div class="container-fluid bg-secondary" style="margin-bottom:60px !important;">

    <!-- Card container -->
    <div class="container-fluid mx-auto" id="contain">



    <?php //A loop using php and preset WordPress functions to pull posts made on the WordPress admin page
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        ?>
        <div class="card bg-dark" id="card-main" style="max-width: 350px; margin-top: 10px;">
          <div class="card-body bg-dark text-light" >
            <?php
              //Get the custom fields for image and tagline
              $key_1_value = get_post_meta(get_the_ID(), 'image', true);
              $key_2_value = get_post_meta(get_the_ID(), 'tagline', true);
              //Get the date of the post and add it to a variable
              $date = get_the_date();

            ?>
            <!-- The post thumbnail. This also serves as a link to the post -->
            <a href="<?php the_permalink(); ?>"><img src="http://127.0.0.1/wp-content/themes/assignmenttheme/image/<?php echo $key_1_value;?>" class="rounded" id="thumbnail" alt="<?php the_title();?>"></a>
            <!-- The title of the post is displayed on the card along with the date and categories -->
            <div class="card-title">
              <!-- Title pulled using WordPress function -->
              <h1 id="card-title"><?php the_title() ?></h1>
              <!-- Date pulled using the variable set above -->
              <p><?php echo $date ?></p>
              <!-- Categories pulled using the cat() function -->
              <p id="cat"><?php echo cat()?></p>
            </div>
            <div>
              <!-- Tagline pulled in the div below the title div using the key 2 custom field -->
              <p><?php echo $key_2_value;?></p>
            </div>
            <!-- The read more button uses the WordPress function to create a link to the post -->
            <div id="button-contain">
            <a href="<?php the_permalink(); ?>" class="btn btn-light rounded-pill" id="more-button">
              Read More
            </a>
          </div>
        </div>
      </div>
      <?php
        } // end while
      } // end if
      ?>
  </div>
</div>

<!-- Add in the functions and the footer at the bottom of the page -->
<?php
  include "functions.php";
  include "footer.php";
?>
