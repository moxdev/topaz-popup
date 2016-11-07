<?php
/**
 * Topaz House Theme Customizer.
 *
 * @package Topaz House
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function topaz_house_customize_register( $wp_customize ) {
	/*$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';*/
	$wp_customize->remove_section("colors");
	
	// GENERAL CONTACT INFORMATION
	$wp_customize->add_section(
        'global_information',
        array(
            'title' => 'Global Site Information'
            //'description' => 'This is a settings section.',
            //'priority' => 35,
        )
    );
	$wp_customize->add_setting(
		'setting_address',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_address',
		array(
			'label' => 'Address',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_city',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_city',
		array(
			'label' => 'City',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_state',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_state',
		array(
			'label' => 'State',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_zip',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_zip',
		array(
			'label' => 'Zip',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_phone',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_phone',
		array(
			'label' => 'Phone',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_phone_2',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_phone_2',
		array(
			'label' => 'Phone 2',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_form_email',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_form_email',
		array(
			'label' => 'Email Address(es) for Contact Form Submittal. (Separate multiple email addresses with a comma and replace the "@" symbol with "_AT_").',
			'section' => 'global_information',
			'type' => 'text',
		)
	);
	
	// SOCIAL MEDIA LINKS
	$wp_customize->add_section(
        'social_media',
        array(
            'title' => 'Social Media'
            //'description' => 'This is a settings section.',
            //'priority' => 35,
        )
    );
	$wp_customize->add_setting(
		'setting_facebook',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_facebook',
		array(
			'label' => 'Facebook URL',
			'section' => 'social_media',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_twitter',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_twitter',
		array(
			'label' => 'Twitter URL',
			'section' => 'social_media',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'setting_google',
		array(
			'sanitize_callback' => 'sanitize_text',
		)
	);
	$wp_customize->add_control(
		'setting_google',
		array(
			'label' => 'Google+ URL',
			'section' => 'social_media',
			'type' => 'text',
		)
	);
}
add_action( 'customize_register', 'topaz_house_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function topaz_house_customize_preview_js() {
	wp_enqueue_script( 'topaz_house_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'topaz_house_customize_preview_js' );

/**
 * SANITIZE WHAT IS ENTERED
*/

function sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}