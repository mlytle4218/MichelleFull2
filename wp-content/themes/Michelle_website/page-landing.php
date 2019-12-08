<!DOCTYPE html>
<html lang="en" style="background: url(<?php bloginfo('template_url'); ?>/images/dressingroom.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
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
    <body style="background: none">
      <div class="container">
        <img src="<?php bloginfo('template_url'); ?>/images/mkg_white.png" class="img-responsive centered_logo" >
      </div>
      <div class="container landing-shift-up">
      	<div class="col-sm-6 col-xs-12 landing-link landing-link-left">
      	<a href="<?php echo get_page_link( get_page_by_title( 'portfolio' )->ID ); ?>">
      		<img src="<?php bloginfo('template_url'); ?>/images/effects_portfolio.png" >
      	</a>
      	</div>
      	<div class="col-sm-6 col-xs-12 landing-link">
      	<a href="<?php echo get_page_link( get_page_by_title( 'scheduling' )->ID ); ?>">
      		<img src="<?php bloginfo('template_url'); ?>/images/appointments.png" >
      	</a>
      	</div>

      </div>

<?php get_footer(); ?>
