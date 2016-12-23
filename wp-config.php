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
/** Имя базы данных для WordPress */
define('DB_NAME', 'turistik');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')+f+4~sq}(E)1Jp0e,w,gJ|LfKRrmDZ1mUeoS5`@`8gmspkPB+w<Jj`P-(*SlYp~');
define('SECURE_AUTH_KEY',  '2xVl&quqHrs%#`Ua+h4Ee47&eWYFwE]?N~H]ZdJAf%Owm8]Ifj?_Ox83pJp(qIiL');
define('LOGGED_IN_KEY',    '#5?=&8>#h]Y<RVT_y81*j#Jg,NJzS.vMu:}D=3bVO1^+|U&HnKX7Yk)1Gu{s#=2O');
define('NONCE_KEY',        ',DEZ#(k.*4wt>WA-bNqKr~?kCw(EZZ:TkA=C2)3%;:%!A8E~4TK:@fuQ)!F3K3{P');
define('AUTH_SALT',        '@<r v`~[ >%!I{Z?!%CTNK59sd$_{Rq+M[D?,1(o@Y*L7Z*Y&_Gz^JYTFPf1{6:w');
define('SECURE_AUTH_SALT', '-vs-cJ*9mLi$~^>grtc}Wq>E*f=FJjU/0#91{>P6MW/7zbK%j%Gl6rIH*T#:=@Tp');
define('LOGGED_IN_SALT',   'z*c!|>%BfoYd()z[M6(K&qN9JmYP)[z[.[HP^3rYu4USazZ4|>WIo$g]Gs7[7jg2');
define('NONCE_SALT',       '6;~WEu:Yh,EHjYPlOp3U|#Zs-PM??oZ_(fU{d5ugxcPYtG9>,T=^ .?`X?092GF$');

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
