<?php

/**

 Template Name: Home Page

 **/

get_header(); ?>
	 <div id="banner"><?php wowslider(5); ?> <?php /*?><?php echo do_shortcode("[easingsliderlite]"); ?><?php */?></div>
     
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div id="contentArea">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<div class="clear"></div>
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>