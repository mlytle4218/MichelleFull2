<?php get_header(); ?>
	<div id="primary" class="container content-area" >
        <main id="main" class="site-main" role="main">

	<div class="row">

		<div class="col-sm-8 blog-main">

			<?php while ( have_posts() ) : the_post();

        		get_template_part( 'content', get_post_format() );

            endwhile; ?>


		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->
        </main>
	</div> <!-- /.conatiner -->

<?php get_footer(); ?>
