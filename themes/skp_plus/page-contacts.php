<?php
/*
	Шаблон страницы Контакты
*/
get_header();
?>
<section class="s-contacts">
	<div class="container">
		<div class="row">
			<h1 class="h1-underline">Наши контакты</h1>
			<div class="s-contacts-wrapper clearfix">
				<div class="col-xs-12 col-sm-6 col-lg-5">
					<div id="yaMap" class="map-wrapper item">
						<?php do_shortcode('[showYaMap coordinates="68.971005, 33.087818" zoom="16"]') ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-offset-1 col-lg-5">
					<div class="address-wrapper item">
						<?php get_template_part( 'template-parts/content', 'address' ); ?>		
					</div>
				</div>
			</div>				
		</div>				
		<div class="row">
			<?php get_template_part( 'template-parts/content', 'request' ); ?>
		</div>
	</div>
</section>
<?php
get_footer();

?>