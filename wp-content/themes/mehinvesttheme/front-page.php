<?php get_header();  ?>

	<div class="content clearfix">
				<div class="left-col">
					<section class="news">
						<h3>Новости:</h3>
						<ul class="news-list">
							<li>
								<span class="date">28.03.2015</span>
								<p>Наша компания  приглашает Вас посетить наш стенд на выставке.<a class="more" href="#" title="">Подробнее</a></p>
							</li>
							<li>
								<span class="date">28.03.2015</span>
								<p>Наша компания  приглашает Вас посетить наш стенд на выставке.<a class="more" href="#" title="">Подробнее</a></p>
							</li>
							<li>
								<span class="date">28.03.2015</span>
								<p>Наша компания  приглашает Вас посетить наш стенд на выставке.<a class="more" href="#" title="">Подробнее</a></p>
							</li>
						</ul>
						<a class="archiv-news" href="#" title="">Архив новостей</a>
					</section>
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
					<div class="servises">
						<h3>Наши услуги:</h3>
						<div class="slider">
							<div id="mycarousel" class="servises-list owl-carousel clearfix">
								<div class="servises-list-item">
									<div class="clearfix">
										<h4><a href="#" title="">Установка дорожных знаков</a></h4>
										<img src="uploads/001.png" width="64" height="64" alt="" title="">
										<p>Обеспечиваем корректную установку дорожных знаков, в соответствии с ГОСТ Украины</p>
										<a class="more" href="#" title="">Подробнее</a>
									</div>
									<div class="clearfix">
										<h4><a href="#" title="">Ямочный ремонт дорог</a></h4>
										<img src="uploads/002.png" width="64" height="64" alt="" title="">
										<p>Предоставлением  услуги в сфере постройки и ремонта дорог</p>
										<a class="more" href="#" title="">Подробнее</a>
									</div>
								</div>
								<div class="servises-list-item">
									<div class="clearfix">
										<h4><a href="#" title="">Услуги фрезы дорожной WIRTGEN W2000</a></h4>
										<img src="uploads/003.png" width="74" height="64" alt="" title="">
										<p>WIRTGEN W2000 используется для дорожно-строительных и дорожно-ремонтных работ</p>
										<a class="more" href="#" title="">Подробнее</a>
									</div>
									<div class="clearfix">
										<h4><a href="#" title="">Грузоперевозки</a></h4>
										<img src="uploads/004.png" width="64" height="64" alt="" title="">
										<p>Грузоперевозки тягачами MAN  и авто тралом</p>
										<a class="more" href="#" title="">Подробнее</a>
									</div>
								</div>
							</div>
						</div>
					</div> 
									
						
					
				</div>
			</div>   
	
<?php get_footer();  ?>	