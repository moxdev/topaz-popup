<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Topaz House
 */

/*if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}*/
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-global') ) :
		 endif;
	?>
	<?php if (is_single() || is_archive() || is_home()) {
		 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-blog') ) :
		 endif;
	} ?>
	<?php if(is_page_template('page-contact.php')) { ?>
	<h2>Get Directions</h2>
	<div id="map-canvas"></div>
	<form>
		<label for="start">Starting Address</label>
		<input type="text" id="start" name="start">
		<input type="hidden" id="end" name="end" value=" 4400 East-West Highway, Bethesda, MD 20814 ">
		<div id="map-error" class="error-box"></div>
		<input type="button" onclick="calcRoute();" value="Get Directions" class="btn">
	</form>
	<div id="directions-panel"></div>
	<?php } ?>
</div><!-- #secondary -->
