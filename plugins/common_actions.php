<?php
/* ====================================
 * Plugin Name: Common Actions
 * Description: Основные действия с функциями
 * Version: 1.0
 * ==================================== */

//Выключаем админ-бар
add_filter('show_admin_bar', '__return_false');

//Чистим хедер
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head','rel_canonical');
remove_action('wp_head','adjacent_posts_rel_link_wp_head');
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');

//Убираем поддержку Embed
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

//Убираем упоминания про генератор
remove_action('wp_head', 'wp_generator');

//Отключаем RSS-feed
add_action('do_feed', 'wpb_disable_feed', 1);
add_action('do_feed_rdf', 'wpb_disable_feed', 1);
add_action('do_feed_rss', 'wpb_disable_feed', 1);
add_action('do_feed_rss2', 'wpb_disable_feed', 1);
add_action('do_feed_atom', 'wpb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );

//Отключаем поддержку Emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

//Регистрируем шорткод для блока гарантий
function add_guarantees_to_post(){
	return '<div class="guarantees table">
							<div class="tr">
								<div class="td g-desc">
									<strong>Мы гарантируем качество наших работ!</strong><br>
									<span>Какую бы услугу Вы не выбрали, какой бы сложной не была работа, Вы можете рассчитывать на великолепное исполнение работы. Мы лучше - <a href="'.get_bloginfo('url').'/testimotionals">нас выбирают</a>!</span>
								</div>
								<div class="td"><i class="fa fa-shield"></i></div>
							</div>
						</div>';
}
add_shortcode('Гарантии', 'add_guarantees_to_post');

?>