<?php get_header(); ?>

<div class="row">
	<div  class="container">

		<div class="col-sm-12">
			<?php
			while ( have_posts() ) : the_post();   
			echo the_post();
			the_content();
			endwhile;
			?>

		</div> <!-- /.col -->
	</div>
</div> <!-- /.row -->

<?php get_footer(); ?>
