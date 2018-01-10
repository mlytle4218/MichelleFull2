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
    <body style="background-color: #FFF">
      <div id="primary" class="container conent-area">
      <main id="main" class="site-main" role="main">

        <a href="<?php echo get_page_link( get_page_by_title( landing )->ID ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/mkg.png" class="img-responsive" height="150"></a>
      </div>
      <div class="row">
        <div class="container">

        
         <?php
      while ( have_posts() ) : the_post();   
the_content();
wp_meta();
      endwhile;
      ?>

        </div>
       </main>
      </div>

      </br>
<footer class="footer">
<?php wp_footer(); ?>
</footer>
</body>
</html>
