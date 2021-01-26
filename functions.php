<?php

//A function to get the category names and list them
//This will be used on the post cards and single pages
//First check if the function has been executed on the current post
if (!function_exists('cat')) {
  //If the function hasn't yet been executed, the function will execute
  function cat() {
    foreach((get_the_category()) as $category){
      //Echo the name of each category with a comma to divide each one
      echo $category->name.", ";
    }
  }
}
?>
