<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mehinvest Theme</title>
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
				<div class="head-inner">
					<a class="logo" href="#" title="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" title="">

					</a>
					<div class="phone">
						<p><span>[097]</span>033-77-04</p>
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
