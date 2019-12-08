<?php get_header(); ?>

<script>
    // lightGallery(document.getElementById('lightgallery'));
 //    lightGallery(document.getElementById('aniimated-thumbnials'), {
 //    	thumbnail:true,
 //    	controls:true
	// }); 
	<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
</script>
<div class="row">
	<div class="container">
		&nbsp;&nbsp;<b style="color:#fff">Filter: </b><?php wp_dropdown_categories( 'show_option_none=All' ); ?>
		<script type="text/javascript">
			<?php
			$categories = get_categories( array(
				'orderby' => 'name',
				'order'   => 'ASC'
				) );
			echo "var categories = ". json_encode($categories) .";\n";
			?>
			<!--
			var dropdown = document.getElementById("cat");
			function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
					for (i = 0; i < categories.length; i ++ ) {
						if (categories[i].name != dropdown.options[dropdown.selectedIndex].text) {
							all =document.getElementsByClassName(categories[i].name);
							for (j = 0; j < all.length; j++) { 
								all[j].style.display = "none";
							}
						} else {
							all =document.getElementsByClassName(categories[i].name);
							for (j = 0; j < all.length; j++) { 
								all[j].style.display = "block";
							}
						}
						
					}

				} else {
					for (i = 0; i < categories.length; i ++ ) {
						all =document.getElementsByClassName(categories[i].name);
						for (j = 0; j < all.length; j++) { 
							all[j].style.display = "block";
						}
					}
				}
			}
			dropdown.onchange = onCatChange;
		-->
	</script>
</div>
</div>

<div class="row">
	<div class="container">
		<?php if ( has_post_thumbnail() ) {
			echo "hi";
			the_post_thumbnail();
		} 
		the_content(); ?>
		
		<!-- <div id="lightgallery"> -->
		<div  >
			<?php if ( $wpb_all_query->have_posts() ) : ?>



				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<?php if (has_post_thumbnail()): ?>
						<?php
						foreach((get_the_category()) as $category) {
							$cat_name=$category->cat_name . ' ';
						}
						?>
						<div class="responsive <?php echo $cat_name ?>" >
							<div class="gallery">


								<a href="#">
									<?php 
									$imageFull = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									the_post_thumbnail('category-thumb', array('class' => 'attachment-post-thumbnail size-post-thumbnail myImg','image-full-size' => $imageFull[0], 'data-cat-name' => $cat_name)); 
									?> 
								</a>
								<!-- <div class="desc">Add a description of the image  </div> -->

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
	<span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

	<!-- Modal Content (The Image) -->
	<img class="modal-content" id="img01">

	<!-- Modal Caption (Image Text) -->
	<div id="caption"></div>
</div>

<?php get_footer(); ?>