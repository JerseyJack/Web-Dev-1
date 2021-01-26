<!-- The single page is where the_permalink() takes the user when clicked on. This is where the single post will be displayed -->
<!-- Add header at the top of the page -->
<?php
  include "header.php";
?>


<?php
  //Get image key 1 custom field for background
  $key_1_value = get_post_meta(get_the_ID(), 'image', true);
?>
  <br>
  <?php
    //Get the post to display with the same loop as on index.php, but only display the selected post, as defined by the_post() WordPress function
    if (have_posts()) :
      while (have_posts()) :
        the_post();
  ?>


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
        <ul>
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

          <!-- First display the tagline key 2 custom field above the content to summarise the following content -->
          <?php echo $key_2_value; ?><br>

          <!-- Add the content using the WordPress functions -->
	        <?php the_content(); ?><br>
      </div>

  <?php
     endwhile;
  endif;
  ?>

<!-- Include the footer at the bottom of the page -->
<?php
  include "footer.php";
 ?>
