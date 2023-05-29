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
define( 'DB_NAME', 'wpfolder' );

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
define( 'AUTH_KEY',         'S,0aXrfkWv0O{kfKYb&D2.>^Z|svN0YDylZCb,/F-?>`(tvV[%;kGWWi=uhYfo7h' );
define( 'SECURE_AUTH_KEY',  '<11>+H*%ZFuF)OwWn|*)H3AA/>Y[mwh{Fh5>G$e(D`Gxn&IOA}oj<+}Sjh!w@Hy#' );
define( 'LOGGED_IN_KEY',    '$`*od-91q]bPSA}G%0k=S62EE.a+4<&gEOdExL7pI{e9q^^_dnh1on|aM%YHsd1n' );
define( 'NONCE_KEY',        'logv>4h@]6083[Rhu>AoFPVH%nwe|=yoO,)^,I=uGnq+x~=VQR6gomZ ajlE1DAq' );
define( 'AUTH_SALT',        '^V?)j%OM:dv 5_p(8X75Fd-k]Q/$h{[7nEB+$M~(;^{^pm{.B<~@bL]ORl&rPRTh' );
define( 'SECURE_AUTH_SALT', 'hv29:np1,`Nb7(f>>7Vh^+uI2]b_9=0%LO`4DRu1%cOurA|.Y5e1)5wVg m>k4Y5' );
define( 'LOGGED_IN_SALT',   'yA`OlcIzNGK#5O:^lP!(d{]KlnQA>?I*W=w+CNd;AW]d;8M,e<rN-)6L*rqhXyN>' );
define( 'NONCE_SALT',       'q`HDkdbaUDiA!IYjD&nCgcKIvS5+ag^h%WwX`>H|%.dq%M]+lgYTsJ!|,N2LNQ#B' );

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
