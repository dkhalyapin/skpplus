<?php 
/*
	Шаблон сингловой страницы одной услуги
*/
get_header();
while ( have_posts() ) : the_post();
?>
<section class="s-single-service">
		<div class="container">
			<div class="row">
				<h1 class="h1-underline"><?php the_title();?></h1>
				<div class="col-sm-9">					
					<img src="<?php echo types_render_field('image', array('output' => 'raw')); ?>" alt="<?php the_title_attribute();?> в Мурманске" class="responsive-img">
					<div class="service-features div-upperline div-underline">
						<ul>
							<?php 
								$features = get_post_meta(get_the_id(), 'wpcf-feature'); 
								foreach ($features as $feature) {
									echo '<li><i class="fa fa-check-circle"></i>'.$feature.'</li>';
								}
							?>							
						</ul>
						<span><?php echo types_render_field('feature-resume', array('output' => 'raw')); ?></span>
					</div>
					<div class="service-callback">
						<a href="<?php bloginfo('url');?>/request" class="button">Заказать услугу</a>
						<a href="#">Обратный звонок</a>
					</div>
					<div class="service-description">
						<?php the_content() ?>
					</div>
					<div class="service-action">
						<a href="<?php bloginfo('url');?>/request" class="button">Заказать услугу</a>
					</div>
				</div>
				<div class="col-sm-3 hidden-xs">
					<div class="side-menu repair">
						<h3 class="div-underline">Услуги по ремонту</h3>
						<ul>
							<li><a href="#"><i class="fa fa-circle"></i>Architecto beatae vitae dicta sunt explicabo</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Laudantium, totam rem aperiam, eaque ipsa</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Nemo enim ipsam voluptatem quia</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Neque porro quisquam est qui dolorem</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Psum quia dolor samet consectetur adipisci</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Quae ab illo inventore veritatis et quasi</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Quia consequuntur magni dolores eos qui</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Ratione voluptatem sequi nesciunt</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Sed ut perspiciatis unde omnis iste natus eror</a></li>
						</ul>
					</div>
					<div class="side-menu business">
						<h3 class="div-underline">Услуги для организаций</h3>
						<ul>
							<li><a href="#"><i class="fa fa-circle"></i>Architecto beatae vitae dicta sunt explicabo</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Laudantium, totam rem aperiam, eaque ipsa</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Nemo enim ipsam voluptatem quia</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Neque porro quisquam est qui dolorem</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Psum quia dolor samet consectetur adipisci</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Quae ab illo inventore veritatis et quasi</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Quia consequuntur magni dolores eos qui</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Ratione voluptatem sequi nesciunt</a></li>
							<li><a href="#"><i class="fa fa-circle"></i>Sed ut perspiciatis unde omnis iste natus eror</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
endwhile;
get_footer();
 ?>