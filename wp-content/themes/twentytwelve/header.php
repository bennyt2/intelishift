<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
  <div id="mainContainer">
    <header>
      <div class="logo"><a href="<?php echo bloginfo('home'); ?> "><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /> </a></div>
      <div class="rightSide">
        <div class="share_icons">
        <a href="http://www.linkedin.com/company/intelishift-technologies" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/linked.png" /> </a>
        <a href="https://twitter.com/Intelishift" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/tweet.png" /> </a>
        <a href="https://www.facebook.com/Intelishift" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" /> </a>
         <?php /*?><span class='st_linkedin_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='linkedin'></span><span class='st_twitter_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span><span class='st_facebook_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span><?php */?> <!-- <img src="<?php// bloginfo('template_url'); ?>/images/linked-in.jpg"/> <img src="<?php// bloginfo('template_url'); ?>/images/twitter.jpg"/> <img src="<?php// bloginfo('template_url'); ?>/images/facebook.jpg"/>--> </div>
        <div class="top_menu">
        <?php wp_nav_menu( array( 'theme_location' => 'top_menu' ) ); ?>
         <!-- <ul>
            <li> <a href="#">Contact Us</a></li>
            <li> <a href="#">Specials</a></li>
            <li> <a href="#">Press Room</a></li>
            <li> <a href="#">Careers</a></li>
            <li> <a href="#">Support</a></li>
          </ul>-->
        </div>
      </div>
      <div class="clear"></div>
    </header>
    <div id="nav">
       <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </div>

	<div id="main" class="wrapper">