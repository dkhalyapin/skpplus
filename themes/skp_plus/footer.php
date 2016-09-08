
	<footer class="main-footer">
		<div class="container">
			<div class="row">				
				<div class="col-xs-3 col-sm-3 col-md-3">
					<nav class="main-menu">
						<?php wp_nav_menu(array('theme_location' => 'primary'));?>
					</nav>					
				</div>
				<div class="col-xs-8 col-xs-offset-1 col-sm-9 col-sm-offset-0 col-md-9">
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="footer-middle-content">
								<span>Отремонтировать ваше устройство?</span>
								<p>Самый простой и быстрый способ отремонтировать ваше устройство сегодня.</p>
								<a href="<?php bloginfo('url');?>/request">Оставить заявку</a>
							</div>
						</div>					
						<div class="col-sm-12 col-md-7">
							<?php get_template_part( 'template-parts/content', 'address' ); ?>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12">
					<div class="social-wrapper">
						<a href="#"><i class="fa fa-vk"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>				
			</div>			
		</div>		
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-3 col-sm-push-9">
							<div class="made-in">
								<span>Сделано с <i class="fa fa-heart"></i> в Мурманске</span>
							</div>
						</div>
						<div class="col-sm-9 col-sm-pull-3">
							<div class="copyright">
								<span><i class="fa fa-copyright"></i>2010 - 2016 Скорая компьютерная помощь плюс. Все права защищены.</span>
							</div>
						</div>					
					</div>
				</div>
			</div>		
		</div>
	</footer>	

<?php wp_footer(); ?>

</body>
</html>
