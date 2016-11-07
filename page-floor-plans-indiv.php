<?php
/**
 * Template Name: Floor Plans (Individual)
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
		<?php $rendering = get_field('rendering'); 
		if($rendering) { ?>
			<a href="<?php echo $rendering['sizes']['floor-plan-large']; ?>" class="fp-overlay-trigger" data-imagelightbox="a"><img src="<?php echo $rendering['sizes']['floor-plan-thumb']; ?>" alt="<?php echo $rendering['alt']; ?>"></a>
		<?php } ?>
	</div><!-- #primary -->
	<?php if(function_exists('topaz_house_floor_plans_subnav')) {
		topaz_house_floor_plans_subnav();
	} ?>

<?php get_footer(); ?>
