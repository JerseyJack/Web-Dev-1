<!-- This file contains the carousel which is included on index.php -->
<?php
  $the_query = new WP_Query(array('cat' => 26)) // Store the exclusive category in a variable
 ?>

<!-- Carousel -->
 <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
     <?php //While there are posts in the category, they will be pulled on to the page
     if ($the_query -> have_posts())
      : while ($the_query -> have_posts())
        : $the_query -> the_post();

        // Get the custom fields for image and tagline
          $key_3_value = get_post_meta(get_the_ID(), 'image-feat', true);
          $key_2_value = get_post_meta(get_the_ID(), 'tagline', true);
      ?>
      <!--Each carousel item will display a post -->
      <div class="carousel-item <?php if ($the_query -> current_post == 0) : ?> active <?php endif; ?>">

        <!-- Display the image on the carousel for the post -->
        <img id="featured-image" src="http://127.0.0.1/wp-content/themes/assignmenttheme/image/<?php echo $key_3_value ?>" class="d-block w-100" alt="Featured Post">

        <!--Carousel caption (title and tagline)-->
        <div class="carousel-caption d-none d-md-block" id="caption">
          <h4><a id="featured-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5><!--The title also serves as a link to the post -->
          <p><?php echo $key_2_value ?></p><!-- Tag line key 2 custom value -->
        </div>
      </div>
      <?php
      endwhile;
      endif;
      ?>
    </div>

    <!-- Bootstrap previous and next buttons -->
    <!-- Previous -->
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <!-- Next -->
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
