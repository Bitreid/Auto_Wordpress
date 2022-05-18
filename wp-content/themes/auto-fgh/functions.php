<?php

/**
* Автор: Бобер Алексей
* Дата реализации: 13.05.2022 13:00
*
* Дата изменения: 18.05.2022 13:21
*
* Утилита экспорта настроек для созданной новой темы Wordpress.
* Она подключает стили, стрипты и доп. поддержку для новой темы Wordpress,
* а так же разрешает загрузку SVG файлов.
*/

add_action( 'wp_enqueue_scripts', function ()
{

  //подключаем стили
  wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap' );
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assests/css/reset.css' );
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/assests/css/slick.css' );
  wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assests/css/style.css' );


  //переподключаем jquery дабы исключить работу штатного в Wordpress
  wp_deregister_script('jquery-core');
  wp_register_script('jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
  wp_enqueue_script( 'jquery' );

  //подключаем наши скрипты
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/assests/js/slick.min.js', array('jquery'), 'null', true );
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/assests/js/wow.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assests/js/main.js', array('jquery'), 'null', true );
});


//добавляем поддержку новостей, <title> и изображений
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файла логотипа.
function svg_upload_allow( $mimes )
{
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' )
{

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}
