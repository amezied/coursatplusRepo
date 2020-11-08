<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
set_time_limit(300);
define('WP_MEMORY_LIMIT', '256M');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'courwwxw_coursatplus');
/** اسم مستخدم قاعدة البيانات */
define('DB_USER', 'courwwxw_coursatplus');
/** كلمة مرور قاعدة البيانات */
define('DB_PASSWORD', 'coursatplus@123#');
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yt2:YC[=W:-[)jVhs2nNJ!1>WpGvno}$2Mirt_@xro)|!/B}*|mKBQztDRXi)oh]' );
define( 'SECURE_AUTH_KEY',  ';*%E2K+ht6HZ3i/wYp4O{I)_)~?DKyo6%e2vw!{$H&MMlx#b$*xVT7i00nZO>l<y' );
define( 'LOGGED_IN_KEY',    '{+qLM:8Y[[x/O(?SG6t:])=zu$^a2#yO5{pE`n8ynK!,_v_It*}a|bpe7?x;:uTH' );
define( 'NONCE_KEY',        '@8~![|UQj?d7#`9([vx$D0yw/AzYw~{EKC[vz(FwX1Flh-[]@d4=ag+#D|b~%-bJ' );
define( 'AUTH_SALT',        '=UEwUlFfwstBvW6BGCqCOiJ[kLD6]r U1+{q^lo d-6D/;R*wq75+CQ5e|_*A#td' );
define( 'SECURE_AUTH_SALT', 'D.quIWJpF{}~k5!sjUH!JlF4P~.d]}6U|9;Qg=/hFS0&qdjeO$P,8@8jSH#ZpYa-' );
define( 'LOGGED_IN_SALT',   '=H/TOp/ :J$i7L4mJ;Y#bi_Fqfb]E,hP6RN/]WL(8wm*m/pE.1q&tY>Elq!J(z`t' );
define( 'NONCE_SALT',       'GCwI3B-o[^2(9sO!.c;]mh~~hFqVEt[-xQQDb:om83*s79n3C<?kTW[+@y#eg2gK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
