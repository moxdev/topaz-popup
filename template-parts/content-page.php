<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Topaz House
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php $title = get_field('on_page_title');
		if($title) { ?>
			<h1 class="entry-title"><?php echo $title; ?></h1>
		<?php } else {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php if( is_page_template( 'page-floor-plans-indiv.php') || is_page_template( 'page-floor-plans-main.php' ) ) {
			if( function_exists('get_field') ) {
				$disclaimer = get_field('disclaimer');
				if( $disclaimer ): ?><span class="disclaimer"><?php echo $disclaimer; ?></span><?php endif;
			}
		} ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'topaz-house' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php if(function_exists('topaz_house_contact_form')) {
		topaz_house_contact_form();
	} ?>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'topaz-house' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
	<?php 
	if(is_page_template('page-area-map.php')) {
		$post_type = 'landmarks';
		$tax = 'landmark-type';
		$tax_terms = get_terms($tax);
		if ($tax_terms) {
			echo '<div id="landmark-listing">';
			foreach ($tax_terms  as $tax_term) {
				$args=array(
				'post_type' => $post_type,
				"$tax" => $tax_term->slug,
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order' => 'ASC'
			);
			
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
				echo '<div class="community-listing-wrapper ' . $tax_term->slug . '">';
				echo '<h2 class="community-listing-header"> '. $tax_term->name . '</h2>';
				echo '<ul class="community-listing">';
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<?php $add = get_field('address');
				$add2 = get_field('address_2');
				$phone = get_field('phone');
				$url = get_field('landmark_website');
				$adtlDetails = get_field('additional_details'); ?>
				<li><span class="comm-name"><?php the_title(); ?>: </span><?php if($add) { echo '<span class="comm-add">' . $add . '</span>'; } ?><?php if($add2) { echo '<span class="comm-add-2">' . $add2 . '</span>'; } ?><?php if($phone) { echo '<span class="comm-details phone">' . $phone . '</span>'; } ?><?php if($url) { echo '<span class="comm-details url"><a target="_blank" href="' . $url . '">Visit Website &raquo;</a></span>'; } ?><?php if($adtlDetails) { echo '<br><br><span class="comm-details">' . $adtlDetails . '</span>'; } ?></li>
				<?php endwhile; ?>
				</ul>
				</div>
				<?php }
				wp_reset_query();
			}
			echo '</div>';
		} 
	} ?>
</article><!-- #post-## -->

