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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'SSudvH&W*SU$b;gMN/D+ZTlWhD:$>$C^+KGfM&J}-1bb[I_[t~</k/mkYYOyfnr4' );
define( 'SECURE_AUTH_KEY',  '%UdW;0P923)hdN{%:TX00Z/5HwRF]IL}mZzOj7h5,kTtEyK^80GafOR(EY1_K!Y>' );
define( 'LOGGED_IN_KEY',    'D:t^Woa8H/6DVZ45fPuHAM`v,Ra3A$m0sW36YlxMEcd8lT2ZTevuJW]Fr^,#i5 |' );
define( 'NONCE_KEY',        'IKkO]+U]2`jRJetJE)ixahgf#z`r/c5`dZ[UM|w~v;<{&,G0?ty!-N~JeK_.hy59' );
define( 'AUTH_SALT',        '8!FJ5R%yE#$qq0,hAK5]>G503/*3& 5d_!`hmxt&ZAt1Nu=vi^|ylVD=kFg|46Zc' );
define( 'SECURE_AUTH_SALT', 'q9os#TB!PG3,pU{-3a#TdF&(y+H!*}>Wu71,yj@ii-^#:+y`[uP!(#zm~~sdMc&H' );
define( 'LOGGED_IN_SALT',   'f7OG+w2+lAU:~YO<Yl39D7Z)KS#mOI:Y>=[ea)!BJrEZ>Vo[]8:UE02dLj$pH.x5' );
define( 'NONCE_SALT',       'ryUq1WqU[UxfX%oh2|mKKc.$Q]c:ETWO=U-P&@2=h&K/ns>v;j=AiIC~?%!$hLvA' );

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
