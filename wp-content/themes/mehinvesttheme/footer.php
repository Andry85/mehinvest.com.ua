		</div> 
	<!-- / Wrapper -->
	<!-- Footer -->
		<footer>
			<div class="nav-outer">
				<nav>
					<?php wp_nav_menu( array(
							'theme_location'  => 'footer',
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
			<div class="footer-inner clearfix">
				<div class="footer-left">
					<div class="meter"><img src="img/meter.jpg" alt="" title=""></div>
				</div>
				<div class="footer-right">
					<p>2018 «МЕХ ИНВЕСТ». Все права защищены. Копирование материалов сайта запрещено.</p>
				</div>
			</div>
		</footer>
	<!-- / Footer -->
	<?php wp_footer(); ?>
</body>
</html>