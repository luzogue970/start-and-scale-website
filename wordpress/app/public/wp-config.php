<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'mWOKc/9DzYz V3NEh:?4q|^_N+:HS/Mb,kPu*cneRZxg>,vSL1Ng]40O {t.w]x!' );
define( 'SECURE_AUTH_KEY',   '_#F!4ilWMv](NDLj181x3%98$$Ej&WkkhY(mieOLjB>;z/]_@qCFi#$&nFbB;UxL' );
define( 'LOGGED_IN_KEY',     '?70.0N][zc~/Un6g}TC[n-/S|UL1T#&kx`RY17TVC8(T`#f&{MYrEIrlFYHR 29I' );
define( 'NONCE_KEY',         'z&epeco&Qg=CBvN?OlVOxNB!be8gPo7$Jd=I6R6Yd&&P]wVEa-s^rhX>VVC71e@!' );
define( 'AUTH_SALT',         '6-|[+@B]:UN:Q7@:c&%W%3JCQ7oW`Oe1.JeOfeHfc)34(dv7&cxF&>x&OSRxk PH' );
define( 'SECURE_AUTH_SALT',  '2!Q1H./3+feu%76:.2^Kw5Cm6I`=$sKap!qv8u<m@VkO}F*/**I.POnj^v&qj+Z=' );
define( 'LOGGED_IN_SALT',    'zS #_(W^S;x%b7REgGDeXs)&,14{2hyl)K[u%mC3-R}_uflhPW`Y3cB6S{v.gXuB' );
define( 'NONCE_SALT',        'kQc/_x4K;oa(ozhMg&KG?]8,S?gv-ACXQJseR:d.oLagW_s!-{sjf%v9%/NDuv@Z' );
define( 'WP_CACHE_KEY_SALT', '!W`U:h<CI0eBI}HR1bS4B|YZW{|Fd?EUsXdT4{(V[*q$%>Sl3e9-toW.MYCV]Bby' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
