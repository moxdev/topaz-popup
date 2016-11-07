<?php
/**
 * Template Name: Community Amenities
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
			<?php $list1Title = get_field('list_1_title');
			$list2Title = get_field('list_2_title');
			$list1Content = get_field('list_1_content');
			$list2Content = get_field('list_2_content');
			if($list1Content || $list2Content) { ?>
			<div id="amenities-list">
				<?php if($list1Content) { ?>
				<section id="sct-amenities-1">
					<?php if($list1Title): ?><h2><?php echo $list1Title; ?></h2><?php endif; ?>
					<?php echo $list1Content; ?>
				</section>
				<?php } ?>
				<?php if($list2Content) { ?>
				<section id="sct-amenities-2">
					<?php if($list2Title): ?><h2><?php echo $list2Title; ?></h2><?php endif; ?>
					<?php echo $list2Content; ?>
				</section>
				<?php } ?>
			</div>
			<?php } ?>
			
			<?php if( function_exists('get_field') ) {
				$disclaimer = get_field('disclaimer');
				if( $disclaimer ): ?><span class="disclaimer wrapper"><?php echo $disclaimer; ?></span><?php endif;
			} ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
