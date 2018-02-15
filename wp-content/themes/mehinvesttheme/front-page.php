<?php get_header();  ?>
	<div class="content clearfix">
				<div class="left-col">
					<?php get_template_part('news'); ?>
				</div>
				<div class="right-col">
					<div class="text">
						<article>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<h2><?php the_title(); ?></h2>
									<p><?php the_content(); ?></p>	

							<?php endwhile; else : ?>
								<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>		
						</article>
					</div> 
					<?php get_template_part('slider'); ?>
				</div>
			</div>   
	
<?php get_footer();  ?>	