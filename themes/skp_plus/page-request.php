<?php
/*
	Шаблон страницы Отправить заявку
*/
get_header();
?>
<section class="s-request">
	<div class="container">			
		<div class="row">
			<h1 class="h1-underline">Отправить заявку</h1>

			<?php get_template_part( 'template-parts/content', 'request' ); ?>

		</div>
	</div>
</section>
<?php
get_footer();

?>