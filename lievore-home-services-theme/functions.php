<?php
/**
 * Lievore Home Services - Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'LHS_VERSION', '2.0.0' );
define( 'LHS_DIR',     get_template_directory() );
define( 'LHS_URI',     get_template_directory_uri() );

/* ------------------------------------------------------------------
   Theme Setup
------------------------------------------------------------------ */
function lhs_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'lievore-hs' ),
		'footer'  => __( 'Footer Navigation',  'lievore-hs' ),
	) );

	load_theme_textdomain( 'lievore-hs', LHS_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'lhs_setup' );

/* ------------------------------------------------------------------
   Enqueue Assets
------------------------------------------------------------------ */
function lhs_assets() {
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'lhs-main',
		LHS_URI . '/assets/css/main.css',
		array( 'google-fonts' ),
		LHS_VERSION
	);
	wp_enqueue_script(
		'lhs-main',
		LHS_URI . '/assets/js/main.js',
		array(),
		LHS_VERSION,
		true
	);
	wp_localize_script( 'lhs-main', 'lhsVars', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'lhs_quote_nonce' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'lhs_assets' );

/* ------------------------------------------------------------------
   Contact / Quote Form - AJAX Handler
------------------------------------------------------------------ */
function lhs_handle_quote_request() {
	check_ajax_referer( 'lhs_quote_nonce', 'nonce' );

	$name    = sanitize_text_field( isset( $_POST['name'] )    ? $_POST['name']    : '' );
	$email   = sanitize_email(      isset( $_POST['email'] )   ? $_POST['email']   : '' );
	$phone   = sanitize_text_field( isset( $_POST['phone'] )   ? $_POST['phone']   : '' );
	$service = sanitize_text_field( isset( $_POST['service'] ) ? $_POST['service'] : '' );
	$message = sanitize_textarea_field( isset( $_POST['message'] ) ? $_POST['message'] : '' );

	if ( ! $name || ! $email ) {
		wp_send_json_error( 'Please fill in your name and email.' );
	}

	$to      = get_option( 'admin_email' );
	$subject = 'New Quote Request from ' . $name;
	$body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nService: {$service}\n\nMessage:\n{$message}";
	$headers = array( "Reply-To: {$name} <{$email}>", 'Content-Type: text/plain; charset=UTF-8' );

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( "Thank you! We'll be in touch shortly." );
	} else {
		wp_send_json_error( 'Email could not be sent. Please call us directly.' );
	}
}
add_action( 'wp_ajax_lhs_quote_request',        'lhs_handle_quote_request' );
add_action( 'wp_ajax_nopriv_lhs_quote_request', 'lhs_handle_quote_request' );

/* ------------------------------------------------------------------
   Widget Areas
------------------------------------------------------------------ */
function lhs_widgets() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'lievore-hs' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'lhs_widgets' );

/* ------------------------------------------------------------------
   Helper: active nav class
------------------------------------------------------------------ */
function lhs_nav_class( $page_slug ) {
	global $post;
	$current = ( $post && $post->post_name === $page_slug ) ? ' current' : '';
	return esc_attr( $current );
}

/* ------------------------------------------------------------------
   Helper: phone link
------------------------------------------------------------------ */
function lhs_phone_link( $display = true ) {
	$phone = get_theme_mod( 'lhs_phone', '(555) 123-4567' );
	$clean = preg_replace( '/[^0-9+]/', '', $phone );
	$link  = '<a href="tel:' . esc_attr( $clean ) . '">' . esc_html( $phone ) . '</a>';
	if ( $display ) {
		echo $link;
	} else {
		return $link;
	}
}

/* ------------------------------------------------------------------
   Customizer Options
------------------------------------------------------------------ */
function lhs_customizer( $wp_customize ) {
	$wp_customize->add_section( 'lhs_contact', array(
		'title'    => __( 'Business Contact Info', 'lievore-hs' ),
		'priority' => 30,
	) );

	$fields = array(
		'lhs_phone'   => array( 'Phone Number',   '(555) 123-4567' ),
		'lhs_email'   => array( 'Email Address',  'info@lievore-homeservices.com' ),
		'lhs_address' => array( 'Service Area',   'Serving Your City & Surrounding Areas' ),
		'lhs_hours'   => array( 'Business Hours', 'Mon-Fri: 7am-6pm  |  Sat: 8am-4pm' ),
	);

	foreach ( $fields as $key => $field ) {
		$label   = $field[0];
		$default = $field[1];
		$wp_customize->add_setting( $key, array(
			'default'           => $default,
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( $key, array(
			'label'   => __( $label, 'lievore-hs' ),
			'section' => 'lhs_contact',
			'type'    => 'text',
		) );
	}
}
add_action( 'customize_register', 'lhs_customizer' );

/* ------------------------------------------------------------------
   Excerpt length
------------------------------------------------------------------ */
function lhs_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'lhs_excerpt_length' );
