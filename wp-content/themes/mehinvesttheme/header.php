<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title() ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>
<?php 

	if ( is_front_page() ): 
		$mehinvesttheme_classes = array('mehinvesttheme-class','homePage');
	else:
		$mehinvesttheme_classes = array('no-mehinvesttheme-class');
	endif;

 ?>
<body <?php body_class($mehinvesttheme_classes); ?>>
<!-- Wrapper -->
		<div class="wrapper">  
			<header>
				<ul class="languages">
					<?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 0 ) ); ?>	
				</ul>
				<div class="head-inner">
					<a class="logo" href="<?php echo get_home_url(); ?>" title=""></a>
					<div class="phone">
						<p><span>[068]</span>375-81-52</p>
						<div class="mail"><a href="mailtoo:mex-invest-bud@ukr.net" title="mex-invest-bud@ukr.net">mex-invest-bud@ukr.net</a></div>
					</div>
				</div>
				<div class="nav-outer">
					<nav>
						<?php wp_nav_menu( array(
							'theme_location'  => 'main',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul>%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>
					</nav>
				</div>
			</header>
