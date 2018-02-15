<?php 

	function mehinvesttheme_script_enqueue() {
		wp_enqueue_style('customstyle', get_template_directory_uri().'/css/slicknav.css', array(), '1.0.0','all');
		wp_enqueue_style('customstyle-1', get_template_directory_uri().'/css/reset.css', array(), '1.0.0','all');
		wp_enqueue_style('customstyle-2', get_template_directory_uri().'/css/style.css', array(), '1.0.0','all');
		wp_enqueue_style('customstyle-3', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '1.0.0','all');
		wp_enqueue_style('customstyle-4', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '1.0.0','all');
		wp_enqueue_script('customjs', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-1', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-2', get_template_directory_uri().'/js/jquery.slicknav.min.js', array(), '1.0.0',true);
		wp_enqueue_script('customjs-3', get_template_directory_uri().'/js/main.js', array(), '1.0.0',true);
	}
	add_action('wp_enqueue_scripts', 'mehinvesttheme_script_enqueue');

	function mehinvesttheme_theme_setup() {
		add_theme_support('menus');
		register_nav_menu('main', 'Main Menu');
		register_nav_menu('footer', 'Footer Menu');
	}
	add_action('init', 'mehinvesttheme_theme_setup');

	//add_theme_support('custom-background');
	//add_theme_support('custom-header');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('image'));



/*
	===============================
		Sidebar function
	===============================
*/
	function mehinvesttheme_widget_setup() {
		/**
		 * Creates a sidebar
		 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		 */
		$args = array(
			'name'          =>'Sidebar name',
			'id'            => 'sidebar-1',
			'description'   => 'Left Sidebar',
			'class'         => 'menu',
			'before_widget' => '<ul class="menu">',
			'after_widget'  => '</ul>',
			'before_title'  => '<span style="display: none;">',
			'after_title'   => '</span>',
		);
		
		register_sidebar( $args );	
	}

	add_action('widgets_init','mehinvesttheme_widget_setup');


 ?>