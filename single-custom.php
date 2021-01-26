<?php
/*
 * Template Name: Main Post Theme
 * Template Post Type: post
 */
?>
<!-- The single page is where the_permalink() takes the user when clicked on. This is where the single post will be displayed -->

<!-- Add header at the top of the page -->
<?php
  include "header.php";
?>


<?php
  //Get image key 1 custom field for background
  $key_1_value = get_post_meta(get_the_ID(), 'image', true);
?>

<!-- A div to show the key 1 image custom field as the background at the top of the page. This allows it to be displayed vary large for the user to see-->
<div class="container-fluid bg-secondary" id="single-background" style="background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(http://127.0.0.1/wp-content/themes/assignmenttheme/image/<?php echo $key_1_value; ?>);">
</div>

  <br>
  <?php
    //Get the post to display with the same loop as on index.php, but only display the selected post, as defined by the_post() WordPress function
    if (have_posts()) :
      while (have_posts()) :
        the_post();
  ?>
  <!-- User will scroll down to the story -->
  <!-- Main story container -->
  <div id="story-container">
    <!-- Story content container for title, custom fields and content -->
  <div class="bg-secondary rounded" id="story">
    <div>

      <?php
        //Get the tagline key 2 custom field to be displayed in the content area
        $key_2_value = get_post_meta(get_the_ID(), 'tagline', true);
        //Get the author and date through the WordPress functions and contain them in a variable
        $author = get_the_author();
        $date = get_the_date();
      ?>
      <!-- The title div contains the title, the author and the date -->
      <div id="single-title">
        <h1>
          <!-- Display the title using the WordPress function -->
	         <?php the_title(); ?>
        </h1>
        <!-- Create a list to display the author and date below the title -->
        <ul style="display: inline; width: 100%; list-style-type: none;">
          <li>
            <!-- Add the author using the variable defined above and add a variable containing a string saying Written by: ahead of it -->
            <h6><?php echo $written="Written by: ". $author; ?></h6>
          </li>
          <li>
            <!-- Add the date using the variable defined above -->
            <h6><?php echo $date; ?></h6>
          </li>
        </ul>

      </div>
      <!-- A div to contain the actual content of the post -->
      <div id="content">
        <h5>
          <!-- First display the tagline key 2 custom field above the content to summarise the following content -->
          <?php echo $key_2_value; ?><br>
        </h5>
        <p>
          <!-- Add the content using the WordPress functions -->
	        <?php the_content(); ?><br>
        </p>
      </div>
      <!-- This div appears below the content div and it displays various accessibility buttons for those with impaired sight so they can still read the post with ease-->
      <div id="access-button-container">
        <!-- The first div contains the text resizing buttons -->
        <div style="width: 50%">
        <h6 style="margin-right: 5px; vertical-align: middle; height: 30px;">Change font size: </h6>
        <button class="btn btn-light rounded-pill" id="sizedown" alt="Decrease text size."onclick="resizeText(-1)">A</button>
        <button class="btn btn-light rounded-pill" id="sizeup" alt="Increase text size." onclick="resizeText(1)">A</button>
        <button class="btn btn-light rounded-pill" id="reset" alt="Reset size."onclick="resetText()">Reset Text Size</button>
        </div>
        <!-- The second div contains the high contrast buttons -->
        <div style="width: 50%; float:right;">
        <button class="btn btn-light rounded-pill" id="contrast" alt="Make the text contrast with the background"onclick="highContrast()">High Contrast</button>
        <button class="btn btn-light rounded-pill" id="contrast" alt="Reset the text contrast"onclick="resetContrast()">Reset Contrast</button>
        <div>
      </div>
    </div>
  </div>
</div>
</div>

  <?php
     endwhile;
  endif;
  ?>

  <!-- A second container div, still in the main div, displays the same exclusive posts as on the carousel for users to find other stories through the single page -->
  <div class="bg-secondary rounded" id="related">
    <!-- More stories title -->
    <div id="single-title">
      <h1>
        More Stories
      </h1>
    </div>

      <!-- Get the exculsive category and while that category has posts, display them on this div -->
      <?php

        $the_query = new WP_Query(array('cat' => 26));//Get exculsive category

        //This this category has posts then while it has posts to display, display each post
        if ($the_query -> have_posts())
        : while ($the_query -> have_posts())
          : $the_query -> the_post();

        // Get the custom fields for image and tagline
        $key_1_value = get_post_meta(get_the_ID(), 'image', true);
        $key_2_value = get_post_meta(get_the_ID(), 'tagline', true);
       ?>
       <!-- The posts found in the above loop are displayed in this div -->
       <div id="related-single">
         <div>
           <!-- Like the cards on index.php, the image can be used as a link -->
           <a href="<?php the_permalink(); ?>"><img src="http://127.0.0.1/wp-content/themes/assignmenttheme/image/<?php echo $key_1_value;?>" class="rounded" id="thumbnail" alt="<?php the_title();?>"></a>
         </div>
         <div>
           <!-- Display the link as the title below the thumbnail -->
           <h5><a style="color: #000;" id="featured-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
         </div>
       </div>
       <?php
       endwhile;
       endif;
       ?>

     </div>

   </div>




<!-- Include the footer at the bottom of the page -->
<?php
  include "footer.php";
 ?>
