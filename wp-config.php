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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "{{ db_name }}" );

/** Database username */
define( 'DB_USER', "{{ db_user }}" );

/** Database password */
define( 'DB_PASSWORD', "{{ db_password }}" );

/** Database hostname */
define( 'DB_HOST', "{{ db_host }}" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these %
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8,+1+;<4_HhvVP8VpY(EX/3}[Eo^sA=0{RC+beF}Odwd&ft?k15mTD]HU9bumB]X' );
define( 'SECURE_AUTH_KEY',  '?GTt2_}[Bz`1TiI.]7-:+GmdN>`!UMf=MM(hufvU~{}*/<e1V][d4gl9E@Lgc6}q' );
define( 'LOGGED_IN_KEY',    '.urS0@H!;/)x@Ug4ueY!7lZy;ft,0*&kFj#QIvx2(nQR~T>=X8_`7=5SSr&sboYQ' );
define( 'NONCE_KEY',        '#l,]$_7Xvs>mO(BzZ#+8K2o&Qg:+=TVub.1gx}wd>(PH[xL{w;a:mD/&HoGU}I~' );
define( 'AUTH_SALT',        '.3cg3Fo{E6Fg^AX>1G.Ma@6O25`bjw#r)&~ S4Ff-gcRm4ej@Ns2!sl~Br*(6px' );
define( 'SECURE_AUTH_SALT', 'QHl?}ib:GhC&h)bnWa,F1,v;Z~!IN9j)QeLzy.6(tafv(cF.@r080tH}B(z]a/X2' );
define( 'LOGGED_IN_SALT',   'fO(}iF~PIVA(]:a`D?zhd7fA2Q9u [px,#D*Xga3+x<aw}j>M3H+!J-Nxt7^.(8' );
define( 'NONCE_SALT',       'H3$rer5^SIbL_c>=c6>BkA0y0Bmj,3kj15moDm[}V}]Z!e3uP.m3gXX4>9Dc8|w' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
