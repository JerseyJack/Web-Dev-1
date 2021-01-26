<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Font awsome style sheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Tab favicon -->
    <link rel="icon" href="http://127.0.0.1/wp-content/themes/assignmenttheme/image/e.png">

    <!-- Page title -->
    <title>The Empire - UK and World News</title>
  </head>

  <body class="bg-secondary">

    <?php

    include "functions.php";

    ?>



<!--/////////////////// NAV BAR ////////////////////-->
<!-- Logo header -->
    <div class="container-fluid bg-danger"> <!-- Fluid container to contain centred elements -->
      <div class="container-fluid mx-auto bg-danger" id="logo">
        <img src="http://127.0.0.1/wp-content/themes/assignmenttheme/image/empirewhite.png">
      </div>
    </div>

<!-- Nav bar collapses when the page width gets shorter -->
<div class="container-fluid sticky-top bg-dark" > <!-- Fluid container to contain centred elements -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!-- Nav bar links -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <!-- Home -->
      <li class="nav-item">
        <a class="nav-link text-white" href="http://localhost/">Home <span class="sr-only">(current)</span></a>
      </li>

      <!-- Category dropdowns -->
      <!-- UK News -->
      <li class="nav-item dropdown text-white">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          UK News
        </a>
        <div class="dropdown-menu text-white bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/uk-news/england/">England</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/uk-news/scotland/">Scotland</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/uk-news/wales/">Wales</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/uk-news/northern-ireland/">Northern Ireland</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/uk-news/channel-islands/">Channel Islands</a>
        </div>
      </li>
      <!-- World News -->
      <li class="nav-item dropdown text-white">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          World News
        </a>
        <div class="dropdown-menu text-white bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/world-news/europe/">Europe</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/world-news/asia/">Asia</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/world-news/north-america/">North America</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/world-news/south-america/">South America</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/world-news/oceania/">Oceania</a>
        </div>
      </li>
      <!-- Sports -->
      <li class="nav-item dropdown text-white">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sports
        </a>
        <div class="dropdown-menu text-white bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/sports/football/">Football</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/sports/tennis/">Tennis</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/sports/baseball/">Baseball</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/sports/swimming/">Swimming</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/sports/rugby/">Rugby</a>
          <a class="dropdown-item text-white bg-dark" href="http://localhost/category/sports/cricket/">Cricket</a>
        </div>
      </li>
      <!-- Other links -->
      <!-- Politics -->
      <li class="nav-item">
        <a class="nav-link text-white" href="http://localhost/category/politics/">Politics <span class="sr-only">(current)</span></a>
      </li>
      <!-- Entertainment -->
      <li class="nav-item">
        <a class="nav-link text-white" href="http://localhost/category/entertainment/">Entertainment <span class="sr-only">(current)</span></a>
      </li>
      <!-- Technology -->
      <li class="nav-item">
        <a class="nav-link text-white" href="http://localhost/category/technology/">Technology <span class="sr-only">(current)</span></a>
      </li>
      <!-- Exclusive -->
      <li class="nav-item">
        <a class="nav-link text-white" href="http://localhost/category/exclusive/">Exclusive <span class="sr-only">(current)</span></a>
      </li>
      <!-- About Us -->
      <li class="nav-item">
        <a class="nav-link text-white" href="http://localhost/about-us/" >About Us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <!-- Search form will get the query searched and pass it on to search.php -->
    <form class="form-inline my-2 my-lg-0" action="/" method="get">
      <!-- Input the query. The value is set to the_seach_query() WordPress function to send the entered text to the search.php -->
      <input class="form-control rounded-pill mr-sm-2" id="search" type="search" name="s" value="<?php the_search_query() ?>" placeholder="Search" aria-label="Search">
      <!-- Enter button -->
      <button class="btn btn-outline-light rounded-pill my-2 my-sm-0" id="search" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
