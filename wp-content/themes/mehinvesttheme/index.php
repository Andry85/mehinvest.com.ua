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
				<?php
				
					$lastPosts = new WP_Query('type=post&cat=7');
						if ($lastPosts->have_posts() ) : 

							while ($lastPosts->have_posts() ) : $lastPosts->the_post(); ?>
							
							<?php get_template_part('content',get_post_format()); ?>	

						<?php endwhile; 

						endif; 
					wp_reset_postdata();
				?>

			</div>
		</div> 
	</div>
</div>   
<?php get_footer();  ?>	