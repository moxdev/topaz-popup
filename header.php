<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Topaz House
 */
if(is_page(68)) {
	require ('inc/contact.php');
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-7305896-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
(function(a,e,c,f,g,b,d){var h={ak:"962449234",cl:"MIeWCLTonlsQ0p73ygM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[f]||(a[f]=h.ak);b=e.createElement(g);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(g)[0];d.parentNode.insertBefore(b,d);a._googWcmGet=function(b,d,e){a[c](2,b,h,d,null,new Date,e)}})(window,document,"_googWcmImpl","_googWcmAk","script");
</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'topaz-house' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="216px" height="96.5px" viewBox="0 0 216 96.5" enable-background="new 0 0 216 96.5" xml:space="preserve">
					<g>
						<g><title>Topaz House Apartments, Bethesda, MD logo</title> <description>Logo of Topaz House Apartments</description> 
							<path fill="#FFFFFF" d="M11.4,91.4c0,1.6,0,2.7,1.4,3.5V95H7.3v-0.1c1.4-0.5,1.2-2.5,1.2-3.8V78.7H6.1c-1.2,0-2.4,0.3-3.3,1.1H2.7
								l1-3.3h0.1c0.3,0.1,0.7,0.1,1.1,0.2h0.7h10.3c0.5,0,0.9,0,1.3-0.2h0.1l-0.9,3.3h-0.1c-0.4-1-1.5-1.1-2.4-1.1h-2.5V91.4z"/>
							<path fill="#FFFFFF" d="M20.3,85.6c0,3.9,2.7,7.9,7.1,7.9c4.2,0,6.9-3.1,6.9-7.2c0-4-2.6-8-7-8C23,78.3,20.3,81.4,20.3,85.6
								 M37.4,85.7c0,5.7-4.7,9.8-10.2,9.8c-5.5,0-10.1-3.9-10.1-9.6c0-5.3,4.6-9.7,10.4-9.5C33.3,76.3,37.4,80.7,37.4,85.7"/>
							<path fill="#FFFFFF" d="M46.1,76.8c3.6,0,6.3,1.7,6.3,4.8c0,3.2-3,5.2-6.1,5.2c-0.7,0-1.4-0.1-2-0.4c2.4-0.1,5-1.6,5-4.3
								c0-2.4-1.7-3.4-3.9-3.4c-0.7,0-1.3,0.1-1.9,0.2v12.5c0,1.6,0,2.7,1.4,3.5V95h-5.5v-0.1c1.4-0.5,1.2-2.6,1.2-3.8V80.7
								c0-1.2,0.2-3.3-1.2-3.8v-0.1H46.1z"/>
							<path fill="#FFFFFF" d="M60.6,79.1l-2.7,7h5.5L60.6,79.1z M57.2,88.1l-1.4,3.9c-0.6,1.6-0.8,2.4,0.6,2.9V95h-5.1v-0.1
								c1.6-0.8,2.1-2.4,2.7-3.9l4.6-11.6c0.4-1,0.9-2.2-0.4-2.6v-0.1h4.4L68.2,91c0.6,1.6,1.1,3.1,2.7,3.9V95h-5.7v-0.1
								c1.4-0.6,1.1-0.9,0.4-2.9l-1.5-3.9H57.2z"/>
							<path fill="#FFFFFF" d="M71.2,95l10-16l-4.7-0.3c-1.7-0.1-2.7,0.2-4.2,1.2h-0.1l1.4-3.2H86L76,92.7l5.8,0.3c2,0.1,3.8-0.5,5.5-1.5
								h0.1L85.8,95H71.2z"/>
							<path fill="#FFFFFF" d="M133.5,86.1v5c0,1.2-0.2,3.3,1.2,3.8V95h-5.3v-0.1c1.4-0.5,1.2-2.6,1.2-3.8V80.6c0-1.2,0.2-3.3-1.2-3.8
								v-0.1h5.3v0.1c-1.4,0.5-1.2,2.5-1.2,3.8v3.4h10v-3.4c0-1.3,0.2-3.3-1.2-3.8v-0.1h5.3v0.1c-1.4,0.5-1.2,2.5-1.2,3.8v10.5
								c0,1.2-0.2,3.3,1.2,3.8V95h-5.3v-0.1c1.4-0.5,1.2-2.6,1.2-3.8v-5H133.5z"/>
							<path fill="#FFFFFF" d="M152.3,85.6c0,3.9,2.7,7.9,7.1,7.9c4.2,0,6.9-3.1,6.9-7.2c0-4-2.6-8-7-8C155.1,78.3,152.3,81.4,152.3,85.6
								 M169.5,85.7c0,5.7-4.7,9.8-10.2,9.8c-5.5,0-10.1-3.9-10.1-9.6c0-5.3,4.6-9.7,10.4-9.5C165.4,76.3,169.5,80.7,169.5,85.7"/>
							<path fill="#FFFFFF" d="M183.9,93.2c-1.2,1.6-3.5,2.3-5.4,2.3c-1.8,0-3.8-0.6-5-1.9C172,91.9,172,90,172,88v-7.4
								c0-1.2,0.2-3.3-1.2-3.8v-0.1h5.3v0.1c-1.4,0.5-1.2,2.5-1.2,3.8V88c0,3.7,1.6,5.4,4.4,5.4c1.6,0,3.1-0.6,4-1.9
								c0.6-0.8,0.6-1.5,0.6-2.5v-8.3c0-1.2,0.2-3.3-1.2-3.8v-0.1h5.3l0,0.1c-1.4,0.5-1.2,2.5-1.2,3.8v10.4c0,1.2-0.2,3.3,1.2,3.8V95
								h-4.1V93.2z"/>
							<path fill="#FFFFFF" d="M200.8,80.1c-1.1-1.1-2.8-1.7-4.4-1.7c-1.6,0-3.6,0.6-3.6,2.5c0,3.8,9.5,3.7,9.5,8.9c0,3-3.1,5.7-7.4,5.7
								c-1.7,0-3.4-0.2-5-0.8l-0.8-3.5c1.6,1.4,3.9,2.3,6.1,2.3c1.6,0,4-0.9,4-2.9c0-4.3-9.5-3.5-9.5-9.4c0-3.5,3.6-4.8,7-4.8
								c1.4,0,2.8,0.2,4.1,0.6V80.1z"/>
							<path fill="#FFFFFF" d="M208.6,92.7l3.5,0.3c1.8,0.2,3.7-0.4,5.1-1.6h0.1l-1.2,3.6h-11.6v-0.1c1.4-0.5,1.2-2.6,1.2-3.8V80.7
								c0-1.3,0.2-3.3-1.2-3.8v-0.1h8.9c0.5,0,0.9,0.1,1.3-0.1h0.1v3.2h-0.1c-0.9-1-2-1.1-3.3-1.1c-1,0-1.9,0-2.8,0.2v5.2h3.3
								c0.4,0,0.9,0,1.2-0.2h0.1v2.9h-0.1c-0.4-0.8-1.6-0.8-2.5-0.8h-2.1V92.7z"/>
						</g>
						<polygon fill="#9496A1" points="108,1.1 37.6,71.4 37.6,71.5 81.6,71.5 81.5,71.4 108,45 134.5,71.4 134.4,71.5 178.4,71.5 
							178.4,71.4 	"/>
						<path fill="#9496A1" d="M93.7,71.4L108,57.1l14.3,14.3L108,85.8L93.7,71.4z M108,52.1L88.6,71.4L108,90.8l19.4-19.4L108,52.1z"/>
						
							<rect x="100.4" y="63.9" transform="matrix(0.7071 0.7071 -0.7071 0.7071 82.1453 -55.4439)" fill="#9496A1" width="15.1" height="15.1"/>
					</g>
			</svg>
			</a>
		</div><!-- .site-branding -->
		<div id="aux-info">
			<?php $ph = get_theme_mod('setting_phone_2');
			$fb = get_theme_mod('setting_facebook');
			$tw = get_theme_mod('setting_twitter');
			$goo = get_theme_mod('setting_google');
			if($fb || $tw || $goo) { ?>
			<ul class="social-media">
				<?php if($fb): ?><li><a href="<?php echo $fb; ?>" id="social-link-fb" target="_blank">Find Us on Facebook</a></li><?php endif; ?>
				<?php if($tw): ?><li><a href="<?php echo $tw; ?>" id="social-link-tw" target="_blank">Follow Us on Twitter</a></li><?php endif; ?>
				<?php if($goo): ?><li><a href="<?php echo $goo; ?>" id="social-link-goo" target="_blank">Visit Us on Google+</a></li><?php endif; ?>
			</ul>
			<?php }
			if($ph): ?><a class="tel googlenumber" onclick="ga('send', 'event', 'Links', 'Link', 'Telephone Link');" href="tel:<?php echo $ph; ?>" id="masthead-tel"><?php echo $ph; ?></a><?php endif; ?>
		</div>

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'topaz-house' ); ?></button>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => '' ) ); ?>
		</nav><!-- #site-navigation -->
		<?php if(is_page_template('frontpage.php') || is_page_template('page-floor-plans-main.php') || is_page_template('page-floor-plans-indiv.php')) { 
			// WP_Query arguments
			$args = array (
				'post_type' => array( 'specials' ),
				'posts_per_page' => '1',
			);
			
			// The Query
			$myquery = new WP_Query( $args );
			
			// The Loop
			if ( $myquery->have_posts() ) { ?>
				<div id="special">
				<?php while ( $myquery->have_posts() ): $myquery->the_post(); ?>
					<div class="special-content">
						<span class="special-title">Monthly Special</span>
						<?php the_content(); ?>
					</div>
				<?php endwhile;
			} ?>
			</div>
			<?php wp_reset_postdata();?>
		<?php } ?>
		<?php if(has_post_thumbnail() && is_page_template('frontpage.php')) { ?>
			<div id="feature-img-wrapper">
				<?php the_post_thumbnail('home-page-highlight'); 
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				if($caption) : ?><span class="feature-caption"><?php echo $caption; ?></span><?php endif; ?>
			</div>
		<?php } ?>
	</header><!-- #masthead -->
	
	<div id="translate-wrap">
		<?php if(has_post_thumbnail() && !is_page_template('frontpage.php') && !is_page_template('page-photo-gallery.php') && !is_page_template('page-area-map.php')) { ?>
			<div id="feature-img-wrapper">
				<?php the_post_thumbnail('drill-page-highlight'); 
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				if($caption) : ?><span class="feature-caption"><?php echo $caption; ?></span><?php endif; ?>
			</div>
		<?php } else if(is_page_template('page-photo-gallery.php')) {
			global $post;
			$attachments = get_posts( array(
				'post_type' => 'attachment',
				'posts_per_page' => -1,
				'post_parent' => $post->ID,
				'orderby' => 'menu_order',
				'order' => 'ASC'
			) );
			if ( $attachments ) { ?>
				<div id="slider" class="flexslider">
					<ul class="slides">
					<?php foreach ( $attachments as $attachment ) {
						$thumbimg = wp_get_attachment_image( $attachment->ID, 'gallery-main', true );
						echo '<li>' . $thumbimg . '</li>';
					} ?>
					</ul>
				</div>
			<?php } else {
				echo 'Sorry, there are currently no images in the gallery. Please check back soon.';
			} 
			if ( $attachments ) { ?>
			<div id="carousel" class="flexslider">
				<ul class="slides">
				<?php foreach ( $attachments as $attachment ) {
					$thumbimg = wp_get_attachment_image( $attachment->ID, 'gallery-thumb', true );
					$image_attributes = wp_get_attachment_image_src($attachment->ID, 'gallery-main'); // returns an array
					echo '<li><a href="' . $image_attributes[0] . '" title="">' . $thumbimg . '</a></li>';
				} ?>
				</ul>
			</div>
		<?php }
		} else if(is_page_template('page-area-map.php')) { ?>
		<div id="map-canvas"></div>
		<a href="#" id="reset">Reset Map</a>
		<?php } ?>
		<div id="content" class="site-content">
			<div class="wrapper">