

<!-- Only code in the header that will be the same on every page -->

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php wp_title(); ?></title>

<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https:cdnjs.cloudflare.com/ajax/libs/bulma/0.1.0/css/bulma.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="stylesheet.css"> -->
<?php wp_head(); ?>


</head>

<body>

  <nav class="nav">
    <div class="nav-left">
      <a class="nav-item logo" href="#">
        <!-- <img class="logo" src="" alt="GoDoo logo"> -->
        <strong>GoDoo</strong>
      </a>
    </div>

    <?php 
      
      $defaults = array(
          'container'  => false,
          'theme_location' => 'primary_menu',
          'menu_class' => 'nav-menu'
        );

      wp_nav_menu( $defaults );

    ?>

<!--     The below represents Explore , blog and other unlinked a tags we had for the demo. 
 -->
    <!-- <div class="nav-right nav-menu">
      <a class="nav-item" href="#">
        Explore
      </a>
      <a class="nav-item" href="#">
        Blog
      </a>

      <span class="nav-item">
        <a class="button is-primary" href="#">
          <span>Contact us</span>
        </a>
      </span>
    </div> -->
  </nav>