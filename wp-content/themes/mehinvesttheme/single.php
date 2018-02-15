<?php get_header();  ?>
<div class="content clearfix">
	<div class="left-col">
		<aside>
			<ul class="menu">
				<?php wp_list_categories( array(
			        'title_li' => ''
			    ) ); ?>
			</ul>
		</aside>
	</div>
	<div class="right-col">
		<div class="inner">
			<div class="container">
				<ul class="patway">
					<li><a href="#" title="">Продукция</a><span>\</span></li>
					<li><a href="#" title="">Дорожные знаки</a></li>
				</ul>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php get_template_part('content',get_post_format()); ?>	

				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>				
			</div>
		</div> 
	</div>
</div>   
<?php get_footer();  ?>	