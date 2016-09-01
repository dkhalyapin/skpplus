<?php
/*
	Шаблон формы обратной связи с шорткодом для плагина CF7
*/
?>
<div class="col-sm-12">
	<div class="request-wrapper clearfix">	

			<?php 
				if (get_queried_object()->post_name == 'contacts')
					echo do_shortcode('[contact-form-7 id="32" title="Задать вопрос"]');
				else
					echo do_shortcode('[contact-form-7 id="25" title="Оформить заявку"]');
			?>
			
	</div>
</div>