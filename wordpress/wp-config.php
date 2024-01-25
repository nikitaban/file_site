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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'lBuG_Gfn6TMpdDosv=J4Ic_G9$OxX}~(-Om9YhZ$KU;Za2PHc{nM85xVeP,D<^Z-' );
define( 'SECURE_AUTH_KEY',  'xni{/N4zYHk>tYnw>;bnlGwsS5|3d y];O6pi}udrHR8) aH=bX/F2emZ!^@WCdf' );
define( 'LOGGED_IN_KEY',    'iCMI-)Y8Fzw(BHu<A/$2XaXso6wDwtEUr,YAfYEn0J&>=c5_wLn]7??Qd|49iX2{' );
define( 'NONCE_KEY',        'AP`.H^m~cV@A6L/O3[1E/9I4zi6FGqN#KT?c8D.p%vQ+?Lj@hxRyMWj_VB?h;!YO' );
define( 'AUTH_SALT',        'l5+I.Ei>1WGr?^_Gp3b2lJ!cj%Sn[>Z{GAWl$Ab,K80n{k$!c 8#FRUP%Jo^]6@e' );
define( 'SECURE_AUTH_SALT', 'W/d<$V9g9`FwW^`kBG}cVkj(3JAWDwKP:<A_3N}KT)1o4-(U )1-lvRhDZMnb^!n' );
define( 'LOGGED_IN_SALT',   '!nz.,e/07zZU-N4,)G$Mb ^#]hyZ>dZ,(TSh})3Jrw@fTQ{B&_z3:YLZpl`?Ua9X' );
define( 'NONCE_SALT',       'Shy@t<uJTmu$^p{l!3rN)R)Y+=$Imx6<r6`?HTO;~d,-,#`i=QgQT4Or~n~zb`C;' );

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
