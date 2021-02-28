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
define( 'DB_NAME', 'demo_portfolio-1' );

/** MySQL database username */
define( 'DB_USER', 'immaruf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'irfanmahmudmaruf' );

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
define( 'AUTH_KEY',         'QSS4>JLbhqLzF ?~]X*?Va58fo]YFS4h#kvLU--(<5@RfNMJ>x`M=;Ty_8v^!V0K' );
define( 'SECURE_AUTH_KEY',  'G-xT?T9eo#V^#F5C z}v-)u} [g^4Qe;OQ>,c1#,R3QO$lAfIF]eWM![hrsM_9r!' );
define( 'LOGGED_IN_KEY',    '?KSchl+W!AWrbsAOd/@Y wyf.>;bJH{3AOgbPs-doHe|/wRYU>#O2,z/q8=PmH5M' );
define( 'NONCE_KEY',        'g_X q4St~*:r0gLDDh_Rnwk`@R2j=vW95-JIwJXIBru*#GA)R}z1{UF8VZWPeYc+' );
define( 'AUTH_SALT',        '`,;8RiOVU Ga2J&T/XV9/shgwc?/XQ%4KY,g!9jQZMb[KCiy,./`3UImw}u0Ih9M' );
define( 'SECURE_AUTH_SALT', 'fM U0uk0XD<_,ny>AC,V-kYs;l?*koez]BXfd!fP#4<|klr8(m#u%IB,a];HB1CO' );
define( 'LOGGED_IN_SALT',   '[*:Z:sqq5kdnBuE4dcICBh=kmEk~Tg hDWX}]^M}W[Z^9d*RrT;{lHLLz<}@[b||' );
define( 'NONCE_SALT',       '(u6D/i >ds:Vg34pzh)>r2g-EEw8&_lrj#h@sG >GGaGm31nfoy:3H0@1+y,}>gw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'im_';

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
