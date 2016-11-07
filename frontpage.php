<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Topaz House
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php // WP_Query arguments
			$args = array (
				'post_type' => array( 'home-page-highlights' ),
				'posts_per_page' => '4'
			);
			
			$myquery = new WP_Query( $args );
			
			if ( $myquery->have_posts() ) { ?>
				<div id="home-highlight-wrapper">
				<?php while ( $myquery->have_posts() ) {
					$myquery->the_post();
					
					$linkTxt = get_field('link_text');
					$linkURL = get_field('link_url');
					$title = $post->post_name;
					$anchor = strtolower($title);
					$anchor = preg_replace('/[^a-z\d]+/i', '-', $anchor); ?>
					<div class="home-highlight" id="<?php echo $anchor; ?>">
						<?php if(has_post_thumbnail()) { ?>
						<div class="img-wrapper">
							<?php the_post_thumbnail('home-highlight'); ?>
						</div>
						<?php } ?>
						<div class="highlight-content">
							<div>
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
								<?php if($linkTxt) { ?>
								<span class="click-through"><?php if($linkURL): ?><a href="<?php echo $linkURL; ?>"><?php endif; ?><?php echo $linkTxt; ?><?php if($linkURL): ?></a><?php endif; ?></span>
							</div>
						</div>
						<?php } ?>
					</div>
				<?php } ?>
				</div>
			<?php } 
			wp_reset_postdata(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
