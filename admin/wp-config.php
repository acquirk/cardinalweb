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
define('DB_NAME', 'dev_cardinalspirits_com');

/** MySQL database username */
define('DB_USER', 'devcardinalspiri');

/** MySQL database password */
define('DB_PASSWORD', 'qD?h*QbP');

/** MySQL hostname */
define('DB_HOST', 'mysql.dev.cardinalspirits.com');

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
define('AUTH_KEY',         'x7K6`+JnJn2_3UOutplcxdt_9x|?@`PU!LaK:xZf2V:aG~:fIZJcr376oWsgnm:D');
define('SECURE_AUTH_KEY',  'mALH/WBvX7Bh"kvDUJMGr1&DeB;?5Snnp6wqWmH50d0?m#5K9hI40e|b&@8L/An8');
define('LOGGED_IN_KEY',    'A%$%6putu&DYTuyTDscmYv_x$cm^VyVwfNW|TYmz!d!@ymz2S:(_?#wD5~j/R%_G');
define('NONCE_KEY',        'r:op$;&dI_|rHYR*w66A%1Q;uo6%0x^yUNg*)q`&UfSg_V|krt49Dqi6n)%NV~~+');
define('AUTH_SALT',        'HvTweBxuTHUI33_@Zsd$4xl+#F#|8H^$Z72g/$GyXeQjkqJwC7+QLd$+6gKv5_TE');
define('SECURE_AUTH_SALT', 'EM_0sbsyquoH&VNaBMyfAgsF)x0ikXcTZVfNE|D1jpYZ+2@jm*L$AyUp`O&WDrtn');
define('LOGGED_IN_SALT',   'tj|dfs"+e&Pp#7"`B+_MGm_p6kbTJIFZt7wR/x*j8fw;KrHApThzl1#WS%&n``5h');
define('NONCE_SALT',       'ZDiWJcFa~I:Hd%mq/P:4PkYAZ(HLLWYKP*s;PoyttoH0HAE5+PvW83R1o3y!q7(t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_6yuifv_';

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

