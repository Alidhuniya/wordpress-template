<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo("charset"); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

  </head>
  <body>
    <!-- Header area -->
    <header class="header-area">
      <div class="container">
        <nav class="nav">
          <a href="#" class="link nav-brand text-light">
           <?php
           if (function_exists("the_custom_logo")) {
            the_custom_logo();
           }
           else {
            bloginfo("name");
           }
         
           ?>
          </a>

          <!-- toogle menu -->
          <button class="toggle-button">
            <span class="fas fa-hamburger"></span>
          </button>
          <!-- Navigation-items -->
          <div class="collapse" id="toggle-collapse">
              <?php
            // display menu
            if(has_nav_menu("primary-menu")){
                wp_nav_menu(array(
                    "theme_location" => "primary-menu",
                    "container" =>'',
                    "items_wrap" => '<ul class="navbar-nav mr-auto">%3$s</ul>'
                ));
            }
              ?>
            <!-- <ul class="navbar-nav mr-auto">
              <li class="nav-link">
                <a href="#" class="link text-light">Home</a>
              </li>
              <li class="nav-link">
                <a href="#" class="link text-light">People</a>
              </li>
              <li class="nav-link">
                <a href="#" class="link text-light">Design</a>
              </li>
              <li class="nav-link">
                <a href="#" class="link text-light">Travel</a>
              </li>
              <li class="nav-link">
                <a href="#" class="link text-light">About Us</a>
              </li>
            </ul> -->

            <div class="search">
                <?php
                // get search form template file using get_search_form
                get_search_form();
                ?>
              <!-- <form action="" class="form-group">
                <input
                  type="search"
                  class="input-control mr-sm-2"
                  placeholder="search"
                />
                <button class="btn btn-submit" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </form> -->
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- End-header area -->

    <!-- Main site -->
    <main class="main-area">