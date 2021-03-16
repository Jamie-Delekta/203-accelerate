<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
    wp_enqueue_style( 'accelerate-child-google-fonts', '//fonts.googleapis.com/css2?family=Creepster&display=swap' );

}

add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

function create_custom_post_types() {
	register_post_type('case_studies', 
		array(
			'labels' => array (
				'name' =>__( 'Case Studies' ),
				'singular_name' =>__( 'Case Study' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array ( 'slug' => 'case-studies' ),
		)

	);

	register_post_type('about_page',
		array(
			'labels' => array (
				'name' =>__( 'About Page' ),
				'singular_name' =>__( 'About' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array ( 'slug' => 'about-page' ),
		)
	);
}
add_action( 'init', 'create_custom_post_types' );


/**
 * Font Awesome Kit Setup
 * 
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
	function fa_custom_setup_kit($kit_url = '') {
	  foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
		add_action(
		  $action,
		  function () use ( $kit_url ) {
			wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
		  }
		);
	  }
	}
  }

  fa_custom_setup_kit('https://kit.fontawesome.com/c0d9f8cf5b.js'); 


  function accelerate_theme_child_widget_init (){

	register_sidebar ( array (
		'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
		'id' => 'sidebar-2',
		'description' =>__( 'Appears on the static front page template', 'accelerate-theme-child '),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
  }

  add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );