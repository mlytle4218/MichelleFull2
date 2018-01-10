<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MichelleGriesi.com</title>
  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div class="container">
        <a href="<?php get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/mkg_white_small.png" class="img-responsive" height="150"></a>
      </div>
      <div class="row">
        <div class="container">
          <nav class="navbar navbar-default">
            <div class="container-fluid container-fluid-modified">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#myNavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>
            <?php wp_nav_menu( array(
              'menu' => 'main_menu',
              'container_class' => 'collapse navbar-collapse navbar-collapse-modified',
              'container_id' => 'myNavbar',
              'menu_class' => 'nav navbar-nav'
              ) ); ?>
            </div>
          </nav>
        </div>
      </div>