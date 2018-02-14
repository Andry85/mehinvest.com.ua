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

								<div class="newsBlock">
									<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									<p><?php the_content(); ?></p>
								</div>		

							<?php endwhile; else : ?>
								<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>				
						</div>
					</div> 
				</div>
			</div>   
	
<?php get_footer();  ?>	