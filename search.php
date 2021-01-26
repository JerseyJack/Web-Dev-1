<?php
  include "header.php";
?>

<div class="container-fluid bg-secondary" style="margin-bottom: 60px !important;">
  <div class="container-fluid mx-auto" id="result-container">

<?php


  $search = get_search_query();//The variable that stores the searched value
  $args = array (
    's' => $search //The seach box has name="s" and this will add the given value to the variable
  );
  //The query
  $the_query = new WP_Query($args);
  //If the searched value matches a post it will display all posts available for that query
  if ($the_query -> have_posts()) {
    _e ("<h2>Search results for ".get_query_var('s')."</h2>");
    while ($the_query -> have_posts()) {
      $the_query -> the_post();


  ?>

<!-- List of results -->
<li style="list-style-type: none; margin-bottom: 10px;">

  <div class="container-fluid rounded bg-dark w-100" id="results">
    <?php //Get variables for post details
    $author = get_the_author();
    $date = get_the_date();
    $key_1_value = get_post_meta(get_the_ID(), 'image', true);
    ?>
    <div style="width: 900px; display:flex;">
      <div id="result-image-container">
        <a href="<?php the_permalink(); ?>"><img src="http://127.0.0.1/wp-content/themes/assignmenttheme/image/<?php echo $key_1_value;?>" class="rounded" id="result-thumbnail" alt="<?php the_title();?>"></a>
      </div>
      <div id="result-div" style="width: 500px; margin-left: 10px;">
        <h5><a id="featured-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p id="results-details"><?php echo $date; ?></p>
        <p id="results-details"><?php echo $written = "Written by: ".$author; ?></p>
        <p id="results-details"><?php echo cat(); ?></p>
      </div>

    </div>

  </div>

</li>

<?php
} //Endwhile
}//Endif
else { //If a query does not match any post...
?>

<!-- Alert the user there are no results for the given query -->
  <h2>Nothing Found</h2>
  <div class="alert alert-info">
    <p> Sorry, the post you were looking for does not exist. Please try again.</p>
  </div>

<?php } //Endelse ?>
</div>
</div>

<?php
  include "footer.php";
?>
