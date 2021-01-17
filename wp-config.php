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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'feedpeak_webpage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`!#j~KCY5@9LuUvtT#c-3[N0)_/ Q8P7h|O8.e|1E{,rf|Xxo#M2f-<cH8ZAC:RW' );
define( 'SECURE_AUTH_KEY',  'scQ##FL`@g<B?Sg* 0OK[8,a}7:0IVO$|k8bX1wUJZw!_=WM_[oR&.LrWn2<f:L>' );
define( 'LOGGED_IN_KEY',    '-^Ys[u&I*D8=tvlbTUq}g5KG8GB@WM}wZk^jeYqrKyT(n5xTku@~U4F?lMXR84QY' );
define( 'NONCE_KEY',        'U]sjvW9f!S1(-B?`)^l#Dm9)ZB29Abb|r *L6*&8AHcMIjRam;d@{>1?c%HTFBr0' );
define( 'AUTH_SALT',        'p7K#oPhp0Ny2wRl3m>3VrrFGK!2Q1iv,p<T|v B^~m,[+^h~fMr_J,Zg.0N9fe-z' );
define( 'SECURE_AUTH_SALT', '}O>NaA)iw(]Y0ZTj6C;}-](lO.FTb+wUE2!<7?pkC|KeXGIqA^m3`AsX|}.5!S.:' );
define( 'LOGGED_IN_SALT',   '[zhT(S9?z#Su,Q4IuJwz.cJHf?M{=1+#KB~9Ye0pL![O]joidt1H:s@M$DK kI3E' );
define( 'NONCE_SALT',       ',gDzzI!c|b`}ehau&Li}ZD9uv96<ad`2s0{[Iy`DGv`tk})m^QD[dWx>`Z/hgN?[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
