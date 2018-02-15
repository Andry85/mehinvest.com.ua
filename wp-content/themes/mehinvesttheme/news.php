<section class="news">
	<h3>Новости:</h3>
	<?php 

		$args = array(
			'type' => 'post',
			'cat' => 7,
			'posts_per_page' => 3

		);
		$lastNews = new WP_Query($args);

		echo '<ul class="news-list">';
				if ($lastNews->have_posts() ) : 

					while ($lastNews->have_posts() ) : $lastNews->the_post(); ?>
					
					<li>
						<span class="date"><?php echo get_the_date(); ?></span>
						<p><?php the_content(); ?></p>	
					</li>

				<?php endwhile; 

				endif; 
			wp_reset_postdata();
		echo '</ul>';

	 ?>
	<a class="archiv-news" href="#" title="">Архив новостей</a>
</section>

