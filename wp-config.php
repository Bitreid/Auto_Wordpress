<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'auto_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HD1E6yG8ac8kw;)`-,ix&HTDMm3l,_b/TlJ[uGwBwhe:nk{.5<Ou?^}a#FB1GZ*<' );
define( 'SECURE_AUTH_KEY',  'q]Cu#R7J_*]bVg<LAaP-D-=XsOVK!>jiY[Xp0W>s[e`,&VD0JBi!$rltuTd$s*y<' );
define( 'LOGGED_IN_KEY',    'uAXhfs#>O(m9>6l{fMCktvo/gPge_CtF&1b&*d8i~p4r}n@K`WUJY&rxVQ>UP6ev' );
define( 'NONCE_KEY',        'ZWFPaiL:_JhexI;/y0!0om/WS48H`swoD/O2+qAO]2^;_lrF` hNYg 3kw8^iF o' );
define( 'AUTH_SALT',        '7y.Jr0/=$}1Q[1~M,Y&Q8SEbD]7zxpHy$U!rghr[Qp/Wti)T(64It$?Esgcki<og' );
define( 'SECURE_AUTH_SALT', 'v~2>k;*%Zzj$2Fh[<6):;=*&||j[T2?5wRZ+b<50MnPtcu%m^9`@+L?>^|B0qG)u' );
define( 'LOGGED_IN_SALT',   'fapyh<mF$P>?c~zoEww1VM~1RWDLMP(7wo{qj8QF$?-?.3 A:|w{6a$>uLT]+v4p' );
define( 'NONCE_SALT',       '@jKvUSt8s>JC8mO?q{~fM$>9OLdE;z*^20%bs`/1?}II2w6wYJ&?xr::U&cAoir|' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
