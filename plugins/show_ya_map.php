<?php
/* ====================================
 * Plugin Name: Show Yandex Map
 * Description: Регистрация шорткода для использования API Яндекс.Карты
 * Version: 1.0
 * ==================================== */
function ymaps_api_init(){
	wp_register_script( 'ymaps_show', '//api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU', array(), false, true);
	wp_enqueue_script('ymaps_show');
}
add_action('wp_enqueue_scripts', 'ymaps_api_init');

function showYaMap ($atts){	
	extract(shortcode_atts (
		array(
			'coordinates' => '68.969563, 33.07454',
			'zoom' => 10
		),
		$atts, 'showYaMap')
	);
	list($lat, $lon) = array_map( 'trim', explode( ',', $coordinates ) );
	$coordinates = $lat.','.$lon;

	add_action('wp_footer', function() use ($coordinates, $zoom){
		echo '<script type="text/javascript">
		ymaps.ready(function(){
		var myMap = new ymaps.Map(
				"yaMap",
				{
					center: ['.$coordinates.'],
					zoom: '.$zoom.',
					controls: [],
					behaviors: []					
				}),
				placePoint = new ymaps.GeoObject({
						geometry: {
							type: "Point",
							coordinates: ['.$coordinates.']
						}
				});
		myMap.geoObjects.add(placePoint);
	});
	</script>';
}, 200);
}

add_shortcode('showYaMap', 'showYaMap');

?>