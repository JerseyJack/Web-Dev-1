<!-- A page that displays the posts of the selected category -->
<!-- Add header at the top of the page -->
<?php
  include "header.php";
?>

<!-- Main container div -->
<div class="container-fluid bg-secondary" style="margin-bottom: 60px;">

  <!-- If the category does not yet contain any posts, a page similar to 404 will display -->
  <?php
  if (!have_posts()) {
      ?>
      <!-- Main container -->
      <div id="error">
        <!-- Title -->
        <h1>No Posts Yet</h1>
        <!-- Subtitle -->
        <h3>Unfortunately, this category does not yet contain any posts.</h3>
        <!-- Image of robot -->
        <img style="height: 210px; width: 230px;" src="http://127.0.0.1/wp-content/themes/assignmenttheme/image/404.png" />
        <br>
        <!-- Return to home button -->
        <a href="https://localhost/" class="btn btn-light rounded-pill">Return to Home</a>
      </div>

  <?php
    }
  ?>

<!-- If the category does have posts, the following will display -->
  <?php
      //The WordPress function will get the selected category which will be stored in a variable
      $cat = get_the_category();

   ?>
   <!-- The selected category wil be displayed in the title of the page to show the user which category they are viewing -->
   <div class="container-fluid mx-auto" id="title">
     <h1>
       <!-- Use the variable defined above to display just the name of the category -->
       <?php echo $cat[0]->cat_name;  ?>
     </h1>
   </div>


   <!-- Container div to contain the post cards -->
  <div class="container-fluid mx-auto" id="contain">
      <!-- Same as in index.php, the loop will display all posts while posts exist -->
      <?php
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
              <a href="<?php the_permalink(); ?>"><img src="http://127.0.0.1/wp-content/themes/assignmenttheme/image/<?php echo $key_1_value;?>" class="rounded" id="thumbnail" alt="Spicy Image"></a>
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
                <div id="button-contain">
                  <!-- The read more button uses the WordPress function to create a link to the post -->
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
</div>

<!-- Add in the footer at the bottom of the page -->
<?php
  include "footer.php";
 ?>
