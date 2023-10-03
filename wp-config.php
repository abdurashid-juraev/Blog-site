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
 * * Настройки базы данных
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
define( 'DB_NAME', 'sitebd' );

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
define( 'AUTH_KEY',         '`u3X}e2}@3l#~,X}$1oJ{k.`{G>q(MJ df14UPgZ>N-Lkg5[Ru_B0)EQcHMqYW2#' );
define( 'SECURE_AUTH_KEY',  '0vXJzOhNmdaMVj1U6)VkLh]#o-OFXbVE>:37J;&a2__X4yc^@./>@A7)XUN{Z?;H' );
define( 'LOGGED_IN_KEY',    'b{as%hRH/ds^%jbWAM.jlEVnEnvHT^ckuFuFC8%+sU }3n8:K5].=)&E3>qggUVF' );
define( 'NONCE_KEY',        '[bWwoXw!]q#k&Yad}sD>|NM|>{Oa!?o~X33JNXX2bvv_,&lBq4O4J@v{(/Eq@+z|' );
define( 'AUTH_SALT',        'amD;VR(e*y_eZ^yYx!Q{mR8.CSEt:XM_1e-F[>APO~L~+Fz~hJ2#]Hs8&BX^SYJD' );
define( 'SECURE_AUTH_SALT', ',OQL4zX=mS>vUPz:~3]0e({;|WaUJsxCK^p4uE)e%X$98u*Wl5|IFQFOpG%#VzgY' );
define( 'LOGGED_IN_SALT',   '#+,]OYHBC0=?a#b{fK] .:Az<-5aRM!h6(L#)=N^hj*%y(o-<tEL/*-l,WimO}>;' );
define( 'NONCE_SALT',       'Y:9aU0TI<an.Pef hnX;3-0zD[[)bmV-g[?x#V[Pe6SliKb~Q!Cs}{Wq KSLhr5_' );

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
