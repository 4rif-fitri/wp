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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'moduleA' );

/** Database username */
define( 'DB_USER', 'comp3' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'u&c3=j>vgWZBneeV}?T}uPg{%^Y@*2pPsWc9;^2$o6L`=WW*Nixh D7jnrw!GH3H' );
define( 'SECURE_AUTH_KEY',  'jR_o$dqQ=EPOogwaY`BfE8<nUp9(So8POzC<w._H4qo0D9%lF!72;Ku<ZagQAxZ*' );
define( 'LOGGED_IN_KEY',    'E;XxcXuq(9bJt?9cn{gm=l;H=];g{UI[$ ~o>v-%&SSC]=lK>o^$h~x2ZYn*KZn*' );
define( 'NONCE_KEY',        'BK%Wr l*yZ8R(p4(i5Sfub#0Ib2F*M^Jf2Hwh6F5T_zY{D:ww&[;T^1:E@BEIh}T' );
define( 'AUTH_SALT',        'V1}Bf]ud+>yIF^9#(^k#gz]}<kU.6f>ElQ#xlHh|itTE$2n:dRJI2;%_da)qT~z#' );
define( 'SECURE_AUTH_SALT', 'S8dHV0j3uKC-Aw:Q sX*u~C|x!!L^V`4$2=U2tlLyGd5/&PQ%U]f.U7Mvb?uG7,F' );
define( 'LOGGED_IN_SALT',   'K9B^,!nLn1>3l{L^w5j`47RNuZE(30bp645vKh@GizQ- $[DINUX!+`@rHEXh}Pu' );
define( 'NONCE_SALT',       ':#S$pX[FdJGh:.Bhz>1QhxlJCWjo4_.>_4![!MU>RjdU8Of>n,jx=wR1b6r}FcVP' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
