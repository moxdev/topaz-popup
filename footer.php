<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Topaz House
 */

?>

			</div><!-- .wrapper -->
		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<nav id="colophon-navigation" role="navigation">
			<?php wp_nav_menu( array( 'menu_id' => 'footer-menu', 'container' => '' ) ); ?>
			</nav>
			<div class="ftr-icons">
				<div id="walkscore">
					<a onclick="ga('send', 'event', 'Walk Score', 'Link', 'Walk Score Link Click');" target="_blank" href="https://www.walkscore.com/score/-4400-East.dash.West-Highway-Bethesda-MD-20814-?utm_source=badge&utm_medium=responsive&utm_campaign=badge"><!--[if lte IE 8]><img src="//pp.walk.sc/badge/walk/-4400-East.dash.West-Highway-Bethesda-MD-20814-.png" style='border-radius: 0; box-shadow: none; outline: 0; color: transparent; margin: 0 0 0 2.000000%; float: left; padding: 0; width: 30.666667%; background: none; border: 0;' alt="Walk Score of 4400 East-West Highway Bethesda MD 20814"><![endif]--> <!--[if gt IE 8]><img src="//pp.walk.sc/badge/walk/-4400-East.dash.West-Highway-Bethesda-MD-20814-.svg" style='border-radius: 0; box-shadow: none; outline: 0; color: transparent; margin: 0 0 0 2.000000%; float: left; padding: 0; width: 30.666667%; background: none; border: 0;' alt="Walkable Bethesda Maryland Apartments - Walk Score of 4400 East-West Highway Bethesda MD 20814"><![endif]--> <!--[if !IE]> <!-- --><img src="//pp.walk.sc/badge/walk/-4400-East.dash.West-Highway-Bethesda-MD-20814-.svg" alt="Bethesda Maryland Apartments Walk Score of 4400 East-West Highway Bethesda MD 20814"><!-- <![endif]--></a>
					<img style="visibility: hidden;" width=1 height=1 src="https://www.redfin.com/rift?ev=external_web&p=walkscore&s=score_badge&a=impression" alt="hidden pixel" />
				</div>
				<img id="apt-ratings" src="<?php echo get_template_directory_uri()  . '/imgs/AR-TopRated-v2-150px-2013.gif'; ?>" alt="Apartment Ratings Top Rated: 2013">
				<span id="eho">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
						<g id="bar2">
							<g id="bar2_1_">
								<rect x="17.9" y="23.3" fill="#41414C" width="15" height="5"/>
							</g>
						</g>
						<g id="bar1">
							<g id="bar1_1_">
								<rect x="17.8" y="16.7" fill="#41414C" width="15" height="5"/>
							</g>
						</g>
						<g id="text">
							<g id="text_1_">
								<polygon fill="#41414C" points="5.3,39.5 5.3,43.7 7.9,43.7 7.9,42.9 6.1,42.9 6.1,41.9 7.7,41.9 7.7,41.2 6.1,41.2 6.1,40.3
									7.8,40.3 7.8,39.5 		"/>
								<g>
									<path fill="#41414C" d="M11.1,40c-0.3-0.3-0.7-0.6-1.1-0.6c-0.4,0-0.8,0.1-1.1,0.4c-0.3,0.4-0.6,1-0.6,1.8c0,0.8,0.2,1.3,0.6,1.8
										c0.3,0.3,0.7,0.4,1.1,0.4c0.2,0,0.4,0,0.6-0.1c0.1,0,0.2-0.1,0.3-0.2l0.4,0.4l0.3-0.4L11.3,43c0.1-0.1,0.2-0.3,0.2-0.6
										c0.1-0.2,0.1-0.6,0.1-1C11.7,40.8,11.6,40.3,11.1,40 M9.5,42.8c-0.2-0.2-0.3-0.7-0.3-1.2c0-0.4,0.1-0.9,0.2-1.1
										c0.2-0.2,0.4-0.3,0.7-0.3c0.3,0,0.6,0.1,0.7,0.4c0.1,0.2,0.2,0.7,0.2,1.1c0,0.2,0,0.4,0,0.6s-0.1,0.2-0.1,0.3l-0.3-0.4l-0.3,0.4
										l0.3,0.4c-0.1,0-0.1,0-0.2,0s-0.1,0-0.2,0C9.8,43.2,9.6,43,9.5,42.8"/>
									<path fill="#41414C" d="M12.5,43.2c0.2,0.4,0.7,0.7,1.2,0.7c0.6,0,1-0.2,1.2-0.7c0.1-0.2,0.2-0.6,0.2-1.1v-2.6h-0.8v2.6
										c0,0.3,0,0.6-0.1,0.7C14.1,42.9,14,43,13.7,43s-0.4-0.1-0.6-0.3C13,42.6,13,42.4,13,42.1v-2.6h-0.8v2.6
										C12.3,42.6,12.4,42.9,12.5,43.2"/>
								</g>
								<path fill="#41414C" d="M16.2,43.7l0.2-0.9h1.3l0.2,0.9h0.8l-1.2-4.2h-0.8l-1.2,4.2H16.2z M17.5,42.2h-0.9l0.4-1.7L17.5,42.2z"/>
								<polygon fill="#41414C" points="19.2,43.7 19.2,39.5 20,39.5 20,42.9 21.6,42.9 21.6,43.7 		"/>
								<polygon fill="#41414C" points="24.2,43.7 23.5,43.7 23.5,39.5 24.2,39.5 24.2,41.2 25.6,41.2 25.6,39.5 26.3,39.5 26.3,43.7
									25.6,43.7 25.6,41.8 24.2,41.8 		"/>
								<g>
									<path fill="#41414C" d="M29.6,39.8c-0.2-0.3-0.7-0.4-1.1-0.4c-0.4,0-0.9,0.1-1.1,0.4c-0.3,0.4-0.6,1-0.6,1.8
										c0,0.8,0.2,1.3,0.6,1.8c0.2,0.3,0.7,0.4,1.1,0.4c0.4,0,0.9-0.1,1.1-0.4c0.3-0.4,0.6-1,0.6-1.8S30,40.3,29.6,39.8 M27.8,42.7
										c-0.2-0.2-0.2-0.7-0.2-1.1s0.1-0.9,0.2-1.1c0.2-0.2,0.4-0.4,0.7-0.4c0.3,0,0.6,0.1,0.7,0.4c0.2,0.2,0.2,0.7,0.2,1.1
										s-0.1,0.9-0.2,1.1c-0.2,0.2-0.4,0.4-0.7,0.4C28.3,43.2,28,42.9,27.8,42.7"/>
									<path fill="#41414C" d="M30.7,42.2v-2.6h0.8v2.6c0,0.3,0,0.6,0.1,0.7c0.1,0.2,0.3,0.3,0.6,0.3c0.3,0,0.4-0.1,0.6-0.3
										c0.1-0.1,0.1-0.3,0.1-0.7v-2.6h0.8v2.6c0,0.4-0.1,0.8-0.2,1.1c-0.2,0.4-0.7,0.7-1.2,0.7s-1-0.2-1.2-0.7
										C30.8,42.9,30.7,42.6,30.7,42.2"/>
									<path fill="#41414C" d="M34,42.5h0.7c0,0.2,0.1,0.3,0.1,0.4c0.1,0.2,0.3,0.2,0.6,0.2c0.2,0,0.3,0,0.4-0.1
										c0.2-0.1,0.3-0.2,0.3-0.4c0-0.1,0-0.2-0.1-0.3s-0.2-0.1-0.4-0.2l-0.3-0.1c-0.3-0.1-0.7-0.2-0.8-0.3c-0.2-0.2-0.3-0.6-0.3-0.9
										c0-0.3,0.1-0.7,0.3-1c0.2-0.2,0.6-0.3,1-0.3c0.3,0,0.7,0.1,0.9,0.3c0.2,0.2,0.4,0.6,0.4,1h-0.7c0-0.2-0.1-0.4-0.2-0.6
										c-0.1-0.1-0.2-0.1-0.4-0.1s-0.3,0-0.4,0.1c-0.1,0.1-0.2,0.2-0.2,0.3s0,0.2,0.1,0.3c0.1,0,0.2,0.1,0.4,0.2l0.6,0.2
										c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.2,0.3,0.4,0.3,0.9c0,0.3-0.1,0.7-0.3,1c-0.2,0.2-0.6,0.3-1,0.3s-0.8-0.1-1.1-0.3
										C34.1,43.3,34,42.9,34,42.5"/>
								</g>
								<rect x="37.3" y="39.5" fill="#41414C" width="0.8" height="4.2"/>
								<polygon fill="#41414C" points="38.7,43.7 38.7,39.5 39.5,39.5 40.8,42.5 40.8,39.5 41.5,39.5 41.5,43.7 40.8,43.7 39.4,40.7
									39.4,43.7 		"/>
								<g>
									<path fill="#41414C" d="M45.3,40.8h-0.7c0-0.3-0.2-0.4-0.4-0.6c-0.1-0.1-0.2-0.1-0.4-0.1c-0.3,0-0.6,0.1-0.7,0.3
										c-0.2,0.2-0.2,0.7-0.2,1.1c0,0.6,0.1,0.9,0.3,1.1c0.2,0.2,0.4,0.3,0.7,0.3c0.2,0,0.4-0.1,0.6-0.2c0.1-0.2,0.2-0.4,0.3-0.7h-0.8
										v-0.7h1.4v2.3h-0.4l-0.1-0.6c-0.1,0.2-0.2,0.3-0.3,0.4c-0.2,0.1-0.4,0.2-0.7,0.2c-0.4,0-0.9-0.2-1.1-0.6
										c-0.3-0.4-0.4-0.9-0.4-1.5c0-0.7,0.1-1.2,0.4-1.7c0.3-0.4,0.8-0.7,1.2-0.7c0.4,0,0.8,0.1,1.1,0.4C45,40.1,45.3,40.4,45.3,40.8"/>
									<path fill="#41414C" d="M8.3,45.5C7.9,45.1,7.5,45,7,45c-0.6,0-1,0.1-1.3,0.4c-0.4,0.3-0.7,1-0.7,1.7c0,0.8,0.2,1.3,0.7,1.7
										C6,49.1,6.4,49.2,7,49.2s1-0.1,1.3-0.4c0.4-0.4,0.7-1,0.7-1.7C8.8,46.5,8.6,45.9,8.3,45.5 M6.1,48.2c-0.2-0.2-0.3-0.7-0.3-1.1
										c0-0.4,0.1-0.8,0.3-1.1c0.2-0.2,0.4-0.3,0.8-0.3s0.7,0.1,0.8,0.3c0.2,0.2,0.3,0.7,0.3,1.1c0,0.4-0.1,0.8-0.3,1.1
										c-0.2,0.2-0.4,0.3-0.8,0.3C6.5,48.7,6.3,48.6,6.1,48.2"/>
									<path fill="#41414C" d="M12.3,45.5c-0.2-0.2-0.6-0.3-0.9-0.3H9.5v4.1h0.9v-1.4h0.9c0.4,0,0.8-0.1,1.1-0.3c0.2-0.2,0.3-0.6,0.3-1
										S12.6,45.7,12.3,45.5 M11.7,46.9C11.6,47,11.5,47,11.3,47h-0.9v-1.2h0.8c0.2,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.2,0.2,0.4
										C11.8,46.7,11.8,46.8,11.7,46.9"/>
									<path fill="#41414C" d="M16.1,45.5c-0.2-0.2-0.6-0.3-1-0.3h-1.8v4.1h0.9v-1.4h0.9c0.4,0,0.8-0.1,1.1-0.3c0.2-0.2,0.3-0.6,0.3-1
										C16.4,46,16.3,45.7,16.1,45.5 M15.5,46.9C15.3,47,15.2,47,15,47h-0.8v-1.2H15c0.2,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.2,0.2,0.4
										C15.7,46.7,15.6,46.8,15.5,46.9"/>
									<path fill="#41414C" d="M20.3,45.5C20,45.1,19.5,45,19,45s-1,0.1-1.3,0.4c-0.4,0.3-0.7,1-0.7,1.7c0,0.8,0.2,1.3,0.7,1.7
										c0.3,0.3,0.8,0.4,1.3,0.4s1-0.1,1.3-0.4c0.4-0.4,0.7-1,0.7-1.7C21,46.5,20.8,45.9,20.3,45.5 M18.1,48.2c-0.2-0.2-0.3-0.7-0.3-1.1
										c0-0.4,0.1-0.8,0.3-1.1c0.2-0.2,0.4-0.3,0.8-0.3c0.3,0,0.7,0.1,0.8,0.3c0.1,0.2,0.3,0.7,0.3,1.1c0,0.4-0.1,0.8-0.3,1.1
										c-0.2,0.2-0.4,0.3-0.8,0.3C18.7,48.7,18.3,48.6,18.1,48.2"/>
									<path fill="#41414C" d="M21.6,45.1v4.1h0.9v-1.7h0.9c0.2,0,0.4,0,0.6,0.1c0.1,0.1,0.1,0.2,0.1,0.6v0.3c0,0.1,0,0.2,0,0.3
										s0,0.1,0,0.2h1V49c-0.1,0-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0-0.3v-0.2c0-0.3,0-0.6-0.1-0.7c-0.1-0.1-0.2-0.2-0.4-0.3
										c0.2-0.1,0.4-0.2,0.4-0.4c0.1-0.2,0.1-0.3,0.1-0.6c0-0.1,0-0.3-0.1-0.4c0-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.4-0.3
										C24.1,45,23.8,45,23.5,45h-1.9V45.1z M23.8,45.9c0.1,0.1,0.2,0.2,0.2,0.6c0,0.2-0.1,0.3-0.2,0.4c-0.1,0-0.2,0.1-0.4,0.1h-1v-1.1
										h1C23.6,45.8,23.7,45.9,23.8,45.9"/>
								</g>
								<polygon fill="#41414C" points="25.4,45.1 25.4,45.9 26.6,45.9 26.6,49.2 27.5,49.2 27.5,45.9 28.7,45.9 28.7,45.1 		"/>
								<g>
									<path fill="#41414C" d="M29.2,47.7v-2.5h0.9v2.5c0,0.3,0,0.4,0.1,0.7c0.1,0.2,0.3,0.3,0.7,0.3c0.3,0,0.6-0.1,0.7-0.3
										c0.1-0.1,0.1-0.3,0.1-0.7v-2.5h0.9v2.5c0,0.4-0.1,0.8-0.2,1c-0.2,0.4-0.8,0.7-1.4,0.7c-0.7,0-1.2-0.2-1.4-0.7
										C29.2,48.5,29.2,48.1,29.2,47.7"/>
								</g>
								<polygon fill="#41414C" points="35.9,45.1 35.9,48 34.2,45.1 33.3,45.1 33.3,49.2 34.1,49.2 34.1,46.4 35.8,49.2 36.6,49.2
									36.6,45.1 		"/>
								<rect x="37.4" y="45.1" fill="#41414C" width="0.9" height="4.1"/>
								<polygon fill="#41414C" points="38.7,45.1 38.7,45.9 40,45.9 40,49.2 40.8,49.2 40.8,45.9 42.1,45.9 42.1,45.1 		"/>
								<polygon fill="#41414C" points="44.9,45.1 44,46.9 43.2,45.1 42.2,45.1 43.6,47.7 43.6,49.2 44.5,49.2 44.5,47.7 45.8,45.1 		"/>
							</g>
						</g>
						<g id="house">
							<g id="house_1_">
								<path fill="#41414C" d="M10.3,16.7l15.1-9.1l14.9,9.1V31h-30V16.7z M25.3,0.7L1.5,15v5.2h3v17.1h41.4V20.2h2.8v-4.9L25.3,0.7z"/>
							</g>
						</g>
					</svg>
				</span>
			</div>
			<div class="site-info" itemscope itemtype="http://schema.org/ApartmentComplex">
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<?php $add = get_theme_mod('setting_address');
					$city = get_theme_mod('setting_city');
					$state = get_theme_mod('setting_state');
					$zip = get_theme_mod('setting_zip');
					if($add): ?><span itemprop="streetAddress" class="ftr-address ftr-contact"><?php echo $add; if($add2): echo ', ' . $add2; endif; ?></span><?php endif; if($city || $state || $zip): ?><span class="comma">, </span><?php endif;
					if ($city): ?><span itemprop="addressLocality" class="ftr-contact"><?php echo $city; ?></span><?php echo ', ' ; endif;
					if ($state): ?><span itemprop="addressRegion" class="ftr-contact"><?php echo $state; ?></span><?php echo ' '; endif;
					if($zip): ?><span itemprop="postalCode" class="ftr-contact"><?php echo $zip; ?></span><?php endif; echo "\n"; ?>
				</div>
				<?php $ph = get_theme_mod('setting_phone');
				$ph2 = get_theme_mod('setting_phone_2');
				if($ph): ?><span itemprop="telephone" id="ph-1"><a class="tel googlenumber" onclick="ga('send', 'event', 'Links', 'Link', 'Telephone Link');" href="tel:<?php echo $ph; ?>"><?php echo $ph; ?></a></span><?php endif;
				if($ph2): ?><span itemprop="telephone" id="ph-2"><a class="tel" href="tel:<?php echo $ph2; ?>"><?php echo $ph2; ?></a></span><?php endif; ?><br>
Leasing Office Hours: Monday - Saturday 10am - 4pm</div><!-- .site-info -->
			<a id="mms" href="http://www.mm4solutions.com/" target="_blank"><span>site by:</span>
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="62px" height="12px" viewBox="0 0 62 12" enable-background="new 0 0 62 12" xml:space="preserve">
					<g>
						<g>
							<g>
								<g opacity="0.9">
									<g>
										<path fill="#FFFFFF" d="M8.3,1.7H3c-1.3,0-2.3,1-2.3,2.3v5.3c0,1.3,1,2.3,2.3,2.3h5.3c1.3,0,2.3-1,2.3-2.3V4.1
											C10.7,2.8,9.6,1.7,8.3,1.7"/>
										<path fill="#41414C" d="M8.5,1.7c0.1,0,0.2,0,0.3,0C7.7,2.1,6,3.1,6,3.1C6,3,7,2.2,8.5,1.7"/>
										<path fill="#41414C" d="M8,1.7h0.2C7.2,2.1,6.8,2.3,6.8,2.3l0,0C6.8,2.3,7.2,2,8,1.7"/>
										<path fill="#41414C" d="M3,11.7c-0.5,0-0.9-0.1-1.2-0.4c0-0.5,0.1-1,0.1-1.5c0.7-4.2,3.6-6.9,7.2-8c0.9,0.3,1.5,1.2,1.5,2.2
											v5.3c0,1.3-1,2.3-2.3,2.3H3z M0.7,9.4V4.1c0-1.3,1-2.3,2.3-2.3h4.6C7.5,1.8,7.3,1.9,7.2,1.9C6.8,2.1,5.7,2.6,4.6,3.4
											C2.7,4.9,1.2,6.9,0.7,9.4"/>
										<path fill="#41414C" d="M11.1,1.4c-0.1,0-0.5,0.1-0.7,0.1c-0.2,0-0.5,0.1-0.5,0.1l0,0c0,0,0.3-0.1,0.7-0.1
											c0.2,0,0.7-0.1,0.8-0.1c-0.2,0-0.6,0.1-1,0.2l0,0C9.9,1.7,9.5,1.8,9.1,1.9C9,1.8,8.9,1.8,8.7,1.8C9,1.7,9.2,1.6,9.5,1.6
											c1-0.2,1.7-0.3,2.2-0.3C11.7,1.3,11.3,1.3,11.1,1.4c-0.2,0-0.3,0-0.3,0l0,0c0,0,0.1,0,0.1,0C10.9,1.4,11.1,1.4,11.1,1.4
											 M7.6,1.7c0.5-0.2,1.1-0.4,1.7-0.5c0.9-0.2,1.4-0.2,1.9-0.2c-0.6,0.1-1.5,0.2-2.5,0.4C8.5,1.6,8.2,1.7,8,1.7H7.6z M8.1,1.7
											c0.2-0.1,0.4-0.1,0.7-0.2c0.8-0.3,1.7-0.4,2.3-0.4c0.3,0,0.5,0,0.6,0c-0.2,0-0.4,0-0.7,0.1c-0.7,0.1-1.5,0.2-2.1,0.4
											C8.8,1.7,8.6,1.7,8.5,1.7c0,0-0.1,0-0.1,0H8.1z"/>
										<path fill="#41414C" d="M9,1.6c0,0,0.5-0.2,1.4-0.3C11.9,1.1,13,1.1,13,1.1s-1.5,0-2.8,0.3C9.3,1.6,9,1.6,9,1.6"/>
										<path fill="#41414C" d="M8.5,2C8.3,2.1,7.8,2.3,7.8,2.3S8,2.1,8.5,2c0.2-0.1,0.4-0.2,0.7-0.2C9.1,1.7,8.7,1.9,8.5,2"/>
										<path fill="#41414C" d="M20.4,5c0-1.4-0.9-2.4-2.4-2.4c-0.7,0-1.3,0.3-1.7,0.8c-0.4-0.5-1-0.8-1.7-0.8c-1.5,0-2.5,1-2.5,2.4
											v3.2h1.4V5c0-0.6,0.4-1,1.1-1c0.9,0,1,0.7,1,1v3.2h1.4V5c0-0.6,0.4-1,1.1-1c0.9,0,1,0.7,1,1v3.2h1.4V5z"/>
										<path fill="#41414C" d="M22.6,2.7h-1.4v5.4h1.4V2.7z M22.6,0.8h-1.4v1.3h1.4V0.8z"/>
										<rect x="23.6" y="0.3" fill="#41414C" width="1.4" height="7.9"/>
										<rect x="25.8" y="0.3" fill="#41414C" width="1.4" height="7.9"/>
										<path fill="#41414C" d="M31.8,6.4h1.4c-0.3,1.1-1.3,1.9-2.6,1.9c-1.5,0-2.8-1.3-2.8-2.8c0-1.6,1.2-2.9,2.8-2.9
											c1.3,0,2.4,0.8,2.7,2.3l-1.2,0.5c0-0.9-0.7-1.6-1.5-1.6c-0.8,0-1.5,0.7-1.5,1.7s0.7,1.7,1.5,1.7C31.1,7.1,31.5,6.8,31.8,6.4"/>
										<path fill="#41414C" d="M33.8,5v3.2h1.4V5c0-0.6,0.4-1,1.1-1c0.9,0,1,0.7,1,1v3.2h1.4V5c0-1.4-0.9-2.4-2.4-2.4
											C34.8,2.6,33.8,3.6,33.8,5"/>
										<path fill="#41414C" d="M39.4,5v3.2h1.4V5c0-0.6,0.4-1,1.1-1c0.9,0,1,0.7,1,1v3.2h1.4V5c0-1.4-0.9-2.4-2.4-2.4
											C40.4,2.6,39.4,3.6,39.4,5"/>
										<path fill="#41414C" d="M46.5,2.7h-1.4v5.4h1.4V2.7z M46.5,0.8h-1.4v1.3h1.4V0.8z"/>
										<path fill="#41414C" d="M52.2,5.8V2.7h-1.4v3.2c0,0.6-0.4,1-1.1,1c-0.9,0-1-0.7-1-1V2.7h-1.4v3.1c0,1.4,0.9,2.4,2.4,2.4
											C51.2,8.3,52.2,7.2,52.2,5.8"/>
										<path fill="#41414C" d="M61.3,5c0-1.4-0.9-2.4-2.4-2.4c-0.7,0-1.3,0.3-1.7,0.8c-0.4-0.5-1-0.8-1.7-0.8c-1.5,0-2.5,1-2.5,2.4
											v3.2h1.4V5c0-0.6,0.4-1,1.1-1c0.9,0,1,0.7,1,1v3.2h1.4V5c0-0.6,0.4-1,1.1-1c0.9,0,1,0.7,1,1v3.2h1.4V5z"/>
										<ellipse fill="#41414C" cx="27.8" cy="2.6" rx="0" ry="0"/>
										<path fill="#41414C" d="M29,4.8h4.2c0,0.2,0.1,0.4,0.1,0.5c0,0.2,0,0.4,0,0.6H29V4.8z"/>
										<path fill="#41414C" d="M14.1,11.4V9.1h-0.4l-0.5,1.2c-0.1,0.1-0.1,0.3-0.2,0.4c0-0.1-0.1-0.3-0.2-0.4l-0.5-1.2h-0.4v2.3h0.3
											v-1.2c0-0.1,0-0.3,0-0.4c0,0.1,0.1,0.2,0.1,0.4l0.5,1.3l0.6-1.3c0.1-0.1,0.1-0.3,0.1-0.4c0,0.1,0,0.3,0,0.4v1.2H14.1z"/>
										<path fill="#41414C" d="M16.6,10.5h-0.7l0.2-0.5c0.1-0.2,0.1-0.4,0.2-0.5c0,0.1,0.1,0.4,0.2,0.5L16.6,10.5z M17.2,11.4
											l-0.8-2.3H16l-0.8,2.3h0.4l0.2-0.5h0.9l0.2,0.5H17.2z"/>
										<path fill="#41414C" d="M19.7,9.8c0,0.2-0.2,0.4-0.4,0.4h-0.7V9.4h0.7C19.6,9.4,19.7,9.5,19.7,9.8 M20.1,9.8
											c0-0.5-0.3-0.7-0.7-0.7h-1v2.3h0.3v-0.9h0.5l0.5,0.9H20l-0.5-0.9C19.9,10.4,20.1,10.1,20.1,9.8"/>
										<path fill="#41414C" d="M23.1,11.4l-0.8-1.5l0.7-0.8h-0.4l-0.7,0.8c-0.1,0.1-0.2,0.3-0.3,0.3c0-0.1,0-0.3,0-0.4V9.1h-0.3v2.3
											h0.3v-0.7l0.4-0.5l0.7,1.2H23.1z"/>
										<polygon fill="#41414C" points="25.7,11.4 25.7,11 24.5,11 24.5,10.3 25.2,10.3 25.2,10 24.5,10 24.5,9.4 25.6,9.4 25.6,9.1
											24.2,9.1 24.2,11.4 					"/>
										<polygon fill="#41414C" points="28.3,9.4 28.3,9.1 26.7,9.1 26.7,9.4 27.3,9.4 27.3,11.4 27.7,11.4 27.7,9.4 					"/>
										<rect x="29.5" y="9.1" fill="#41414C" width="0.3" height="2.3"/>
										<path fill="#41414C" d="M32.8,11.4V9.1h-0.3v1.2c0,0.1,0,0.5,0,0.5c0-0.1-0.1-0.2-0.2-0.3l-0.9-1.4h-0.4v2.3h0.3v-1.2
											c0-0.1,0-0.4,0-0.5c0,0.1,0.1,0.2,0.2,0.3l0.9,1.4H32.8z"/>
										<path fill="#41414C" d="M35.8,10.5v-0.3h-0.7v0.3h0.4v0c0,0.3-0.1,0.5-0.5,0.5c-0.4,0-0.6-0.3-0.6-0.8s0.2-0.8,0.6-0.8
											c0.2,0,0.4,0.1,0.5,0.3l0.3-0.2C35.5,9.2,35.3,9,34.9,9c-0.6,0-1,0.5-1,1.2c0,0.7,0.4,1.2,1,1.2C35.4,11.4,35.8,11.1,35.8,10.5
											"/>
										<path fill="#41414C" d="M40,10.7c0-0.4-0.3-0.6-0.7-0.7c-0.4-0.1-0.5-0.2-0.5-0.4c0-0.2,0.1-0.3,0.4-0.3c0.2,0,0.4,0.1,0.5,0.2
											l0.2-0.2C39.7,9.2,39.5,9,39.2,9c-0.4,0-0.8,0.2-0.8,0.6c0,0.4,0.2,0.5,0.7,0.7c0.4,0.1,0.5,0.2,0.5,0.4c0,0.2-0.2,0.3-0.5,0.3
											c-0.2,0-0.4-0.1-0.6-0.3L38.3,11c0.2,0.2,0.5,0.4,0.8,0.4C39.7,11.4,40,11.1,40,10.7"/>
										<path fill="#41414C" d="M42.6,10.2c0,0.5-0.2,0.8-0.6,0.8c-0.4,0-0.6-0.3-0.6-0.8c0-0.5,0.2-0.8,0.6-0.8
											C42.4,9.4,42.6,9.7,42.6,10.2 M43,10.2C43,9.5,42.6,9,42,9c-0.6,0-1,0.5-1,1.2c0,0.7,0.4,1.2,1,1.2C42.6,11.4,43,10.9,43,10.2"
											/>
										<polygon fill="#41414C" points="45.6,11.4 45.6,11 44.4,11 44.4,9.1 44.1,9.1 44.1,11.4 					"/>
										<path fill="#41414C" d="M48.3,10.4V9.1H48v1.3c0,0.4-0.2,0.6-0.5,0.6c-0.3,0-0.5-0.2-0.5-0.7V9.1h-0.3v1.3c0,0.6,0.3,1,0.9,1
											C48,11.4,48.3,11.1,48.3,10.4"/>
										<polygon fill="#41414C" points="51.1,9.4 51.1,9.1 49.4,9.1 49.4,9.4 50.1,9.4 50.1,11.4 50.4,11.4 50.4,9.4 					"/>
										<rect x="52.2" y="9.1" fill="#41414C" width="0.3" height="2.3"/>
										<path fill="#41414C" d="M55.3,10.2c0,0.5-0.2,0.8-0.6,0.8c-0.4,0-0.6-0.3-0.6-0.8c0-0.5,0.2-0.8,0.6-0.8
											C55,9.4,55.3,9.7,55.3,10.2 M55.6,10.2c0-0.7-0.4-1.2-1-1.2c-0.6,0-1,0.5-1,1.2c0,0.7,0.4,1.2,1,1.2
											C55.2,11.4,55.6,10.9,55.6,10.2"/>
										<path fill="#41414C" d="M58.5,11.4V9.1h-0.3v1.2c0,0.1,0,0.5,0,0.5c0-0.1-0.1-0.2-0.2-0.3l-0.9-1.4h-0.4v2.3h0.3v-1.2
											c0-0.1,0-0.4,0-0.5c0,0.1,0.1,0.2,0.2,0.3l0.9,1.4H58.5z"/>
										<path fill="#41414C" d="M61.3,10.7c0-0.4-0.3-0.6-0.7-0.7C60.1,9.9,60,9.8,60,9.7c0-0.2,0.1-0.3,0.4-0.3c0.2,0,0.4,0.1,0.5,0.2
											l0.2-0.2C61,9.2,60.8,9,60.4,9c-0.4,0-0.8,0.2-0.8,0.6c0,0.4,0.2,0.5,0.7,0.7c0.4,0.1,0.5,0.2,0.5,0.4c0,0.2-0.2,0.3-0.5,0.3
											c-0.2,0-0.4-0.1-0.6-0.3L59.6,11c0.2,0.2,0.5,0.4,0.8,0.4C61,11.4,61.3,11.1,61.3,10.7"/>
									</g>
								</g>
							</g>
						</g>
					</g>
				</svg>
			</a>
		</footer><!-- #colophon -->
	</div><!-- #translate-wrap -->
</div><!-- #page -->

<!-- Pop-up Modal -->
<div class="home-modal">
    <div>
    	<a href="#" class="close-modal">X</a>
      	<div>
      		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 206.75 89.21"><defs><clipPath id="clip-path" transform="translate(0 0)"><rect width="206.75" height="89.21" style="fill:none"/></clipPath></defs><title>Topaz House</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g style="clip-path:url(#clip-path)"><path d="M8.33,85.39c0,1.49,0,2.52,1.39,3.33v.08H4.43v-.08c1.34-.5,1.18-2.41,1.18-3.59V73.44H3.26a4.69,4.69,0,0,0-3.18,1H0l.93-3.12H1a4.13,4.13,0,0,0,1,.19H12.66a3,3,0,0,0,1.23-.19H14l-.86,3.12H13c-.35-.92-1.41-1-2.3-1H8.33Z" transform="translate(0 0)" style="fill:#fff"/><path d="M16.93,79.88c0,3.67,2.64,7.44,6.83,7.44s6.65-2.91,6.65-6.81S27.93,73,23.71,73a6.51,6.51,0,0,0-6.78,6.89m16.53.1c0,5.34-4.51,9.22-9.83,9.22s-9.74-3.72-9.74-9.09c0-5,4.4-9.14,10-9,5.61,0,9.56,4.17,9.56,8.88" transform="translate(0 0)" style="fill:#fff"/><path d="M41.78,71.55c3.47,0,6.11,1.65,6.11,4.59S45,81.06,42,81.06a4.54,4.54,0,0,1-1.95-.36c2.3-.13,4.78-1.52,4.78-4,0-2.31-1.66-3.22-3.79-3.22a11.09,11.09,0,0,0-1.87.16V85.41c0,1.47,0,2.51,1.39,3.3v.08H35.27v-.08c1.36-.47,1.2-2.41,1.2-3.59V75.25c0-1.18.16-3.09-1.17-3.62v-.08Z" transform="translate(0 0)" style="fill:#fff"/><path d="M55.77,73.78l-2.64,6.6h5.26Zm-3.34,8.54L51,86c-.56,1.47-.75,2.23.53,2.7v.08H46.67v-.08c1.55-.76,2-2.23,2.59-3.72l4.46-10.93c.37-.94.88-2-.4-2.44v-.08h4.22L63.09,85c.61,1.49,1.09,3,2.62,3.72v.08H60.23v-.08c1.31-.58,1.09-.86.37-2.7l-1.44-3.69Z" transform="translate(0 0)" style="fill:#fff"/><path d="M66,88.79,75.67,73.7l-4.54-.26a5.8,5.8,0,0,0-4,1.13H67l1.36-3H80.2l-9.61,15,5.61.31a9.21,9.21,0,0,0,5.29-1.44h.08l-1.49,3.33Z" transform="translate(0 0)" style="fill:#fff"/><path d="M126,80.38v4.74c0,1.18-.16,3.09,1.18,3.59v.08h-5.07v-.08c1.33-.5,1.17-2.41,1.17-3.59V75.22c0-1.18.19-3.09-1.17-3.59v-.08h5.07v.08c-1.34.5-1.18,2.41-1.18,3.62V78.5h9.64V75.25c0-1.21.19-3.12-1.18-3.62v-.08h5.1v.08c-1.36.5-1.2,2.41-1.2,3.59v9.91c0,1.18-.16,3.09,1.2,3.59v.08h-5.1v-.08c1.36-.5,1.18-2.41,1.18-3.59V80.38Z" transform="translate(0 0)" style="fill:#fff"/><path d="M144.09,79.88c0,3.67,2.64,7.44,6.83,7.44s6.65-2.91,6.65-6.81S155.09,73,150.87,73a6.51,6.51,0,0,0-6.78,6.89m16.53.1c0,5.34-4.51,9.22-9.83,9.22S141,85.49,141,80.12c0-5,4.4-9.14,10-9,5.61,0,9.56,4.17,9.56,8.88" transform="translate(0 0)" style="fill:#fff"/><path d="M174.5,87.06a6.7,6.7,0,0,1-5.23,2.15,6.63,6.63,0,0,1-4.83-1.83c-1.42-1.52-1.36-3.28-1.36-5.16v-7c0-1.18.19-3.09-1.18-3.59v-.08H167v.08c-1.34.5-1.18,2.41-1.18,3.59v7c0,3.48,1.49,5.11,4.25,5.11a4.75,4.75,0,0,0,3.9-1.83,3.4,3.4,0,0,0,.56-2.38V75.22c0-1.18.16-3.09-1.17-3.59v-.08h5.07l0,.08c-1.36.5-1.2,2.41-1.2,3.62v9.88c0,1.18-.16,3.09,1.2,3.59v.08H174.5Z" transform="translate(0 0)" style="fill:#fff"/><path d="M190.84,74.67A6.14,6.14,0,0,0,186.65,73c-1.52,0-3.44.58-3.44,2.39,0,3.59,9.18,3.54,9.18,8.38,0,2.81-3,5.42-7.15,5.42a14,14,0,0,1-4.78-.79l-.77-3.28a9.34,9.34,0,0,0,5.85,2.17c1.52,0,3.82-.89,3.82-2.73,0-4.09-9.18-3.35-9.18-8.91,0-3.3,3.44-4.56,6.7-4.56a13.65,13.65,0,0,1,4,.58Z" transform="translate(0 0)" style="fill:#fff"/><path d="M198.34,86.59l3.39.31a6.73,6.73,0,0,0,4.94-1.55h.08l-1.2,3.43H194.42v-.08c1.36-.47,1.2-2.41,1.2-3.59V75.25c0-1.21.16-3.12-1.2-3.62v-.08H203a2.79,2.79,0,0,0,1.25-.13h.08v3.06h-.08a3.78,3.78,0,0,0-3.15-1,15.37,15.37,0,0,0-2.72.18V78.5h3.18a2.78,2.78,0,0,0,1.17-.16h.08v2.78h-.08c-.43-.76-1.55-.73-2.38-.73h-2Z" transform="translate(0 0)" style="fill:#fff"/></g><polygon points="101.41 0 33.63 66.53 33.65 66.55 75.94 66.55 75.92 66.53 101.41 41.5 126.91 66.53 126.89 66.55 169.18 66.55 169.2 66.53 101.41 0" style="fill:#9496a1"/><path d="M87.6,66.53,101.41,53l13.81,13.56L101.41,80.08Zm13.82-18.3L82.76,66.53l18.65,18.3,18.65-18.3Z" transform="translate(0 0)" style="fill:#9496a1"/><polygon points="101.41 76.64 91.11 66.53 101.41 56.41 111.72 66.53 101.41 76.64" style="fill:#9496a1"/></g></g></svg>

        	<h1>special offer what!</h1> <!-- baba -->

        	<p>Specials on select apartments with a 1 year lease!</p> <!-- opensansbold -->

        	<p>Call our Leasing Team today for your personal tour! 1.888.771.0216</p> <!-- opensansbold -->

        	<h4>*Restrictions Apply. Contact leasing office for further information.</h4> <!-- opensanslight-->
      	</div>
      	<div class="modal-footer">
      	</div>
    </div>
</div>
<!-- Pop-up Modal -->

<?php wp_footer(); ?>
<?php if(is_page_template('frontpage.php')) { ?>
<script>
jQuery(window).load(function(e) {
	jQuery('.home-highlight .img-wrapper').imagefill();
});
</script>
<?php } ?>
<?php if(has_post_thumbnail() && !is_page_template('page-photo-gallery.php') && !is_page_template('page-area-map.php')) { ?>
<script>
jQuery(window).load(function(e) {
	jQuery('#feature-img-wrapper').imagefill();
});
</script>
<?php } ?>
<?php if(is_page_template('page-photo-gallery.php')) {?>
<script>
jQuery(window).load(function() {
	jQuery('#carousel').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 250,
		nextText: "",
		prevText: "",
		asNavFor: '#slider'
	});
	jQuery('#slider').flexslider({
		animation: "fade",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		nextText: "",
		prevText: "",
		sync: "#carousel"
	});
});
</script>
<?php } ?>

 <!--Google Call Tracking-->
 <script type="text/javascript">
     var callback = function(formatted_number, mobile_number) {
       var e = jQuery('.googlenumber');
for(var i=0; i<e.length;i++)
   { e[i].href = "tel:" + mobile_number;
       e[i].innerHTML = ""
       e[i].appendChild(document.createTextNode(formatted_number));}
     };
     window.onload=function() {_googWcmGet(callback,'1-888-771-0216');};
</script>


<!-- <!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 962449234;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/962449234/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>