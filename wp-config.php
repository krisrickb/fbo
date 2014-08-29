<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'orders_foodbenders_com_1');

/** MySQL database username */
define('DB_USER', 'awa6bgjn');

/** MySQL database password */
define('DB_PASSWORD', 'gf^jgVr7');

/** MySQL hostname */
define('DB_HOST', 'mysql.krissucks.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'csMb?`XzDmu|e&a5P6N2D!0zy7q@$m90vjQh+#Amf1c*5&1bL5Lv2%)81Bu^)u0;');
define('SECURE_AUTH_KEY',  'WE%3)0&ecMjwU^nrfxzGf&6+W:y4%/KeMq)N#lB4dG$z/A?c9MNL6w#aqed9(@T%');
define('LOGGED_IN_KEY',    'wHfg4EL_`$SU%QV6&f4n&@PHIp!#d7!1oBZcU!f#pW|:lqBhpJwXRjWm6l#ccHSW');
define('NONCE_KEY',        't1WDbq&TkmkSNmI|GuQHhRJyX+Q+wLCQ%#t2Td4~tp)?t/k_R%)D?B~imuDf)fX`');
define('AUTH_SALT',        'p890KprwtR/27vvdWhIINE6pS%S9DvHfNoskk|8T54rgb)2IRlG|j|h2TAhu2^gO');
define('SECURE_AUTH_SALT', 'dXMvx(TbVTV*LmeXEuky)`;()+xbgh(:nzR8Q;#3^`$8%B~e?EGmr"^Arz+NS)HE');
define('LOGGED_IN_SALT',   't*u6DFk1LyvbY7t?tgv::&ELWZ&X@@xgNI9uOqfSCSeNq5B1(5!"%khGX9f6fE~z');
define('NONCE_SALT',       'Nu7~zL+Y1kY4OP;~c:3Jn+ikbwq#wCZN)SE4wUn`574Eao:7!aH$FjNVo!p0Xqk"');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_6qtx64_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

