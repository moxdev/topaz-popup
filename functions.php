<?php
/**
 * Topaz House functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Topaz House
 */

if ( ! function_exists( 'topaz_house_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function topaz_house_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Topaz House, use a find and replace
	 * to change 'topaz-house' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'topaz-house', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('home-highlight', 650, 500, true);
	add_image_size('drill-page-highlight', 1725, 550, true);
	add_image_size('home-page-highlight', 1185, 550, true);
	add_image_size('gallery-main', 1400, 850, true);
	add_image_size('gallery-thumb', 250, 150, true);
	add_image_size('floor-plan-thumb', 525, 9999, false);
	add_image_size('floor-plan-large', 1200, 1200, false);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'topaz-house' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	/*add_theme_support( 'custom-background', apply_filters( 'topaz_house_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );*/
}
endif; // topaz_house_setup
add_action( 'after_setup_theme', 'topaz_house_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function topaz_house_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'topaz_house_content_width', 640 );
}
add_action( 'after_setup_theme', 'topaz_house_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function topaz_house_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Global Sidebar', 'topaz_house' ),
		'id'            => 'sidebar-global',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'topaz_house' ),
		'id'            => 'sidebar-blog',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'topaz_house_widgets_init' );

function register_jquery()  {
	if (!is_admin()) {
		wp_deregister_script('jquery');
        // Load the copy of jQuery that comes with WordPress
        // The last parameter set to TRUE states that it should be loaded in the footer.
        wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', FALSE, '1.11.2', TRUE);
    }
}
add_action('init', 'register_jquery');

/**
 * Enqueue scripts and styles.
 */
function topaz_house_scripts() {
	wp_enqueue_style( 'topaz-house-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'topaz-house-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'topaz-house-modernizr', get_template_directory_uri() . '/js/modernizr.custom.80561.js', array(), '20150827', true );

	if(has_post_thumbnail() || is_page_template('frontpage.php')) {
		wp_enqueue_script( 'topaz-house-images-loaded', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', array('jquery'), '20150826', true );
		wp_enqueue_script( 'topaz-house-image-fill', get_template_directory_uri() . '/js/jquery-imagefill.min.js', array('jquery'), '20150826', true );
	}

	if(is_page_template('frontpage.php')) {
		wp_enqueue_script( 'topaz-house-home-scripts', get_template_directory_uri() . '/js/home.js', array('jquery'), '20150826', true );
	}

	if(is_page_template('page-photo-gallery.php')) {
		wp_enqueue_script( 'topaz-house-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '20141118', true );
	}

	if(is_page_template('page-contact.php') || is_page_template('page-area-map.php')) {
		wp_enqueue_script( 'topaz-house-google-map-api', 'http://maps.google.com/maps/api/js?sensor=false', array(), '', true );
	}

	if(is_page_template('page-area-map.php')) {
		wp_enqueue_script( 'topaz-house-area-map-spider-markers', get_template_directory_uri() . '/js/oms.min.js', array(), '20150109', true );
		wp_enqueue_script( 'topaz-house-area-map', get_template_directory_uri() . '/js/area-map.js', array('jquery'), '2015082815', true );
	}

	if(is_page_template('page-contact.php')) {
		wp_enqueue_script( 'topaz-house-directions', get_template_directory_uri() . '/js/map-directions.js', array(), '20150109', true );
		wp_enqueue_script( 'topaz-house-jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '20150826', true );
		wp_enqueue_script( 'topaz-house-lib', get_template_directory_uri() . '/js/validate.min.js', array(), '20150826', true );
		wp_enqueue_script( 'topaz-house-validate', get_template_directory_uri() . '/js/form-validate.js', array(), '20150826', true );
	}

	if(is_page_template('page-floor-plans-indiv.php')) {
		wp_enqueue_script( 'topaz-house-lightbox-min', get_template_directory_uri() . '/js/imagelightbox.min.js', array('jquery'), '20150827', true );
		wp_enqueue_script( 'topaz-house-lightbox', get_template_directory_uri() . '/js/lightbox.js', array('jquery'), '20150827', true );
	}

	wp_enqueue_script( 'topaz-house-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// wp_register_script( 'topaz-house-cookies', get_template_directory_uri() . '/js/jquery.cookie.min.js', array('jquery'), '20160711', true );
	wp_enqueue_script( 'topaz-house-modal', get_template_directory_uri() . '/js/modal.js', array('jquery'), '20160711', true );
}
add_action( 'wp_enqueue_scripts', 'topaz_house_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * REMOVE EMOJIS FOR WORDPRESS 4.2
 */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * REQUIRE/RECOMMEND PLUGINS
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'donaldson_group_register_required_plugins' );

function donaldson_group_register_required_plugins() {
	$plugins = array(
		array(
            'name'      => 'Advanced Custom Fields',
            'slug'      => 'advanced-custom-fields',
            'required'  => true,
        ),
		/*array(
            'name'      => 'WP-PageNavi',
            'slug'      => 'wp-pagenavi',
            'required'  => false,
        ),*/
    );
	$config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
	tgmpa( $plugins, $config );
}

/**
 * CUSTOM POST STUFF
 */

function topaz_house_create_custom_posts() {
	register_post_type( 'specials',
		array(
			'labels' => array(
				'name' => __( 'Specials' ),
				'add_new' => __( 'Add New Special' ),
				'add_new_item' => __( 'Add New Special' ),
				'edit' => __( 'Edit' )
			),
			'supports' => array( 'title', 'editor', 'revisions'),
			'public' => true,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-tag',
			'has_archive' => false
		)
	);
	register_post_type( 'home-page-highlights',
		array(
			'labels' => array(
				'name' => __( 'Home Page Highlights' ),
				'add_new' => __( 'Add New Highlight' ),
				'add_new_item' => __( 'Add New Highlight' ),
				'edit' => __( 'Edit' )
			),
			'supports' => array( 'title', 'editor', 'thumbnail', 'revisions'),
			'public' => true,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-star-filled',
			'has_archive' => false
		)
	);
	register_post_type( 'landmarks',
		array(
			'labels' => array(
				'name' => __( 'Area Landmarks' ),
				'add_new' => __( 'Add New Landmark' ),
				'add_new_item' => __( 'Add New Landmark' ),
				'edit' => __( 'Edit' )
			),
			'supports' => array( 'title'),
			'public' => true,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-location-alt',
			'has_archive' => false
		)
	);
}
add_action( 'init', 'topaz_house_create_custom_posts', 0 );

function topaz_house_create_taxonomies() {
	register_taxonomy(
        'landmark-type',
        'landmarks',
        array(
            'labels' => array(
                'name' => 'Landmark Types',
                'add_new_item' => 'Add New Landmark Type',
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
			'hierarchical' => true,
			'has_archive'=>false
        )
    );
}
add_action( 'init', 'topaz_house_create_taxonomies', 0 );

//Remove option for no type from radio button for taxonomies plugin
add_filter('radio-buttons-for-taxonomies-no-term-landmark-type', '__return_FALSE' );

function topaz_house_contact_form() {
	if(is_page_template('page-contact.php')) { ?>
		<form id="form-contact" action="/thank-you/" method="post">
			<?php $recipients = get_theme_mod('setting_form_email'); ?>
			<input type="hidden" value="<?php echo $recipients; ?>" name="recipients" id="recipients">
			<input type="hidden" value="Online Contact Form for Topaz House" name="subject" id="subject">
			<label for="names" class="required"><span class="asterisk">*</span> Name</label>
			<input type="text" id="names" name="names" size="50" class="required">
			<label for="email" class="required"><span class="asterisk">*</span> Email</label>
			<input type="email" id="email" name="email" size="40" class="required">
			<label for="phone">Phone</label>
			<input type="tel" id="phone" name="phone" size="15">
			<label for="date">Move-In Date Needed</label>
			<input type="text" id="date" name="date" size="15">
			<label for="comments">Comments</label>
			<textarea rows="4" id="comments" name="comments"></textarea>
			<label for="spam" class="honey">What is 1 plus two + 4?</label>
			<input name="spam" type="text" size="4" id="spam" maxlength="4" class="honey">
			<div class="error-box"></div>
			<input type="submit" value="Contact Our Leasing Office" class="submit">
		</form>
	<?php }
}

function topaz_house_floor_plans_subnav() {
	$args = array (
		'post_parent' => '72',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'post_type' => array( 'page' ),
		'order' => 'ASC'
	);

	$myquery = new WP_Query( $args );

	if ( $myquery->have_posts() ) { ?>
		<nav class="subnav">
			<ul>
			<?php while ( $myquery->have_posts() ) {
				$myquery->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php } ?>
			</ul>
		</nav>
	<?php } else {
		echo 'No Floor Plans Found!!';
	}

	wp_reset_postdata();
}

function topaz_house_community_map_tax_listing() {
	if( is_page_template('page-area-map.php') ) {
		global $post;
		$post_type = 'landmarks';
		$tax = 'landmark-type';
		$tax_terms = get_terms($tax);
		$cats = array();
		if ($tax_terms) {
			foreach ($tax_terms  as $tax_term) {
				$name = $tax_term->name;
				$slug = $tax_term->slug;
				$desc = $tax_term-> description;
				$count = $tax_term->count;
				$catDetails = array ($name, $slug, $desc, $count);
				array_push($cats, $catDetails);
			}
		}
		//echo json_encode($cats);
		//print_r($cats);

		$args=array(
			'post_type' => $post_type,
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'caller_get_posts'=> 1
		);

		$poi = array();
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ): while ($my_query->have_posts()) : $my_query->the_post();
		$title = get_the_title();
		$lat = get_field('latitude');
		$lng = get_field('longitude');
		$add = get_field('address');
		$add2 = get_field('address_2');
		$phone = get_field('phone');
		$url = get_field('landmark_website');
		if($url) {
			$urlStr = $url;
		} else {
			$urlStr = '';
		}
		$adtlDetails = get_field('additional_details');
		if($adtlDetails) {
			$adtlDetailsStr = $adtlDetails;
		} else {
			$adtlDetailsStr = '';
		}
		$id = get_the_ID();
		$term_list = wp_get_post_terms($id, 'landmark-type');
		if($term_list) {
			foreach ($term_list as $term_list) {
				$slug = $term_list->slug;
			}
		}
		$details = array ($title, $lat, $lng, $add, $add2, $phone, $urlStr, $adtlDetailsStr, $slug);
		array_push($poi, $details);
		endwhile;
		endif;
		wp_reset_query();
		//print_r($poi)?>
        <script>var categories = <?php echo json_encode($cats); ?>; var locations = <?php echo json_encode($poi); ?></script>
	<?php }
}

add_action( 'wp_footer', 'topaz_house_community_map_tax_listing' );