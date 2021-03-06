<?php get_header(); ?>

<script>
	<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'category_name' => 'airbrush')); ?>
</script>

<div class="row">
	<div class="container">
		<div  >
			<?php if ( $wpb_all_query->have_posts() ) : ?>



				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<?php if (has_post_thumbnail()): ?>
						<div class="responsive" >
							<div class="gallery">
									<?php 
										$imageFull = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
										the_post_thumbnail('category-thumb', array('class' => 'attachment-post-thumbnail size-post-thumbnail myImg','image-full-size' => $imageFull[0], 'data-cat-name' => $cat_name)); 
									?> 
							</div>
						</div>

					<?php endif; ?>
				<?php endwhile; ?>
				<!-- end of the loop -->
			</div>



			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div> <!-- /.row -->

<!-- The Modal -->
<div id="myModal" class="modal">

	<!-- The Close Button -->
	<span class="close" onclick="document.getElementById('myModal').style.display='none'">close</span>

	<!-- Modal Content (The Image) -->
	<img class="modal-content" id="img01">

	<!-- Modal Caption (Image Text) -->
	<div id="caption"></div>
</div>

<?php get_footer(); ?>
