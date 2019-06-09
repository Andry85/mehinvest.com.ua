<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress live site */
// define('DB_NAME', 'mehinvest');
// define('DB_USER', 'mehinvest');
// define('DB_PASSWORD', 'yVQtr1342');

/** Имя базы данных для WordPress localhost */
define('DB_NAME', 'mehinvest');
define('DB_USER', 'root');
define('DB_PASSWORD', '');




/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

define( 'WP_AUTO_UPDATE_CORE', false );


/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-IHAE-$iyGMrf1]UU+6yfwB5^Rs,^!0$WsYIKnK|g<L>*V&VjqbM|nq_ZdEyhq,B');
define('SECURE_AUTH_KEY',  '(O6J]_&h5i)fX(vs~@g^qHOuJ&s?nBR !i$kRy=-U^@]_cwe}6BYD{k~*ipVtNk`');
define('LOGGED_IN_KEY',    'o#Ty96aoC@Q&sHVWoM3aS2}8>^L{=)V`]NJwu[!! ;mSuo]Mh6uI3Q6FP fu);HQ');
define('NONCE_KEY',        'h77DpX.BJeDLS<RhpEt#Pd[qlSKK|N(JL?;E=Q@Q9U>/| JWbh@k(dSso5nxCJd.');
define('AUTH_SALT',        '!yW4uG$rj7L0a w%hHWvK,6H|ZWVg>W:kR#okBE500#MwW2wmU#-+:FPR$`Le?&k');
define('SECURE_AUTH_SALT', 'OKaUuT_(GQ7h:}LdUl:~2|pGI *%4Q)R{TuIH|+LK3ki=p=;>!MQ|CpmIrC2&e{_');
define('LOGGED_IN_SALT',   'RyB6%9fr~!9G#)80R`ID_MIpr|dpMd-fkn0#f*%F^=J/ e|*k:*SUb;4vo5_-yvY');
define('NONCE_SALT',       '<n18 7z3rfVub0$<q`3GDP<-Krx_z,GyiS|hQ%QK+G.^CQ?-OX5TRn`d]xRtzbLS');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
