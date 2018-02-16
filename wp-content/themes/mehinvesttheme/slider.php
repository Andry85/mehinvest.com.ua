<div class="servises">
	<h3>Наши услуги:</h3>
	<div class="slider">
		<div id="mycarousel" class="servises-list owl-carousel clearfix">
			<?php 

				$args = array(
					'type' => 'post',
					'cat' => 4,
					'posts_per_page' => 4

				);
				$listServices = new WP_Query($args);

				if ($listServices->have_posts() ) : 

					while ($listServices->have_posts() ) : $listServices->the_post(); ?>
					<div class="servises-list-item">
						<div class="clearfix">
							<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
							<?php if ( has_post_thumbnail()) { ?>
							   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							   	<?php the_post_thumbnail('thumbnail'); ?>
							   </a>	
							 <?php } ?>
							<p><?php the_content(); ?></p>
						</div>
					</div>

				<?php endwhile; 

				endif; 
				wp_reset_postdata();
			 ?>
		</div>
	</div>
</div> 