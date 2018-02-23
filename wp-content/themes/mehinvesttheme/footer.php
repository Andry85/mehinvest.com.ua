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
					<div class="meter">
						<noindex>
							<!-- I.UA counter --><a href="http://www.i.ua/" target="_blank" onclick="this.href='http://i.ua/r.php?219641';" title="Rated by I.UA">
<script type="text/javascript"><!--
iS='http'+(window.location.protocol=='https:'?'s':'')+
'://r.i.ua/s?u219641&p30&n'+Math.random();
iD=document;if(!iD.cookie)iD.cookie="b=b; path=/";if(iD.cookie)iS+='&c1';
iS+='&d'+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)
+"&w"+screen.width+'&h'+screen.height;
iT=iR=iD.referrer.replace(iP=/^[a-z]*:\/\//,'');iH=window.location.href.replace(iP,'');
((iI=iT.indexOf('/'))!=-1)?(iT=iT.substring(0,iI)):(iI=iT.length);
if(iT!=iH.substring(0,iI))iS+='&f'+escape(iR);
iS+='&r'+escape(iH);
iD.write('<img src="'+iS+'" border="0" width="88" height="31" />');
//--></script></a><!-- End of I.UA counter -->
						</noindex>
					</div>
				</div>
				<div class="footer-right">
					<?php if ( is_active_sidebar( 'footer-text' ) ) : ?>
						<?php dynamic_sidebar( 'footer-text' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</footer>
	<!-- / Footer -->
	<?php wp_footer(); ?>
</body>
</html>