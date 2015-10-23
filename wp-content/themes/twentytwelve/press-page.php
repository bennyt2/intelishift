<?php

/**

 Template Name: Press Page

 **/

get_header(); ?>

	<div class="leftArea">

	<div id="primary" class="site-content">

		<div id="content" role="main">
		<h1 style="font-size:21px; margin:20px 0 10px 0;">Press Room</h1>
		<?php if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
			elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
			else { $paged = 1; }
			query_posts( array ( 'order' => 'DESC', 'paged' =>$paged, 'post_type' => 'Press' ) );
			if (have_posts()) : $count=1; while (have_posts()) : the_post();  ?>

			<header class="entry-header">
			<?php the_post_thumbnail(); ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink($post->ID); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

			<div class="entry-summary" style="padding-left:6px;">
			<?php the_excerpt(); ?>
		</div>

			<?php endwhile; ?>


			<footer class="entry-meta">
			<?php if(function_exists('df_pagination')) {df_pagination();} ?>
			</footer>


		<?php else : ?>



			<article id="post-0" class="post no-results not-found">



			<?php if ( current_user_can( 'edit_posts' ) ) :

				// Show a different message to a logged-in user who can add posts.

			?>

				<header class="entry-header">

					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>

				</header>



				<div class="entry-content">

					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>

				</div><!-- .entry-content -->



			<?php else :

				// Show the default message to everyone else.

			?>

				<header class="entry-header">

					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>

				</header>



				<div class="entry-content">

					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .entry-content -->

			<?php endif; // end current_user_can() check ?>



			</article><!-- #post-0 -->



		<?php endif; // end have_posts() check ?>



		</div><!-- #content -->

	</div><!-- #primary -->

    </div>

<div class="rightArea">
<?php get_sidebar('post'); ?>
</div>

<?php get_footer(); ?>