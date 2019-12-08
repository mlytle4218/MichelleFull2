<?php get_header(); ?>

<script>
	<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
</script>
<div class="row">
        <div class="container">
                <div class="responsive_links">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/beauty.jpg">
                        <a href="<?php echo get_page_link( get_page_by_title( 'beauty' )->ID ); ?>">
                                <div class="overlay">
                                    <div class="text">Beauty</div>
                                </div>
                        </a>
                </div>
                <div class="responsive_links">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/airbrush.jpg">
                        <a href="<?php echo get_page_link( get_page_by_title( 'airbrush' )->ID ); ?>">
                                <div class="overlay">
                                    <div class="text">Airbrush</div>
                                </div>
                        </a>
                </div>
                <div class="responsive_links">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/effects.jpg">
                        <a href="<?php echo get_page_link( get_page_by_title( 'effects' )->ID ); ?>">
                                <div class="overlay">
                                    <div class="text">Effects</div>
                                </div>
                        </a>
                </div>
                <div class="responsive_links">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sculpt1.png">
                        <a href="<?php echo get_page_link( get_page_by_title( 'sculpts' )->ID ); ?>">
                                <div class="overlay">
                                    <div class="text">Sculpts and Molds</div>
                                </div>
                        </a>
                </div>


	</div>
</div>


<?php get_footer(); ?>
