<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ikonic' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '->xjIN6Q8F#[/!zpnDN7Abjm,XlYh^zZ`W_}c$c3c`rs=#@dy%^@r};kyn$.OVoF' );
define( 'SECURE_AUTH_KEY',  '27ud9=VTU1OC1P7+>;HoM{I9{rX~,K(oSSP%7lI aaypI%/34Qif![!NprRhgl}t' );
define( 'LOGGED_IN_KEY',    'J+-kE1vZ2+HpCZ7.![Zk$[F=dSS$MOPg{Fipbjzui)Y4>*5l1VwRKsLMMS85Jl!y' );
define( 'NONCE_KEY',        '*qpv#aD<[Bg)T&SU-g`aA~=sTN-.tI,=bnK2sMkGlbIA-=U=+;PqW8O}Cos(DG0o' );
define( 'AUTH_SALT',        '),<!FhKsL il`:{b69I7h;T*p^2?c~6]py`ZbW,Pi0V0&8toNrM@5=C]go*u=4fb' );
define( 'SECURE_AUTH_SALT', 'm{b6p[cH(}5zj.4k~y.^xE~WeTPsUOPDHJ]$Bp]]u;y]%rU,D$d0-|xg/lZ+krt%' );
define( 'LOGGED_IN_SALT',   'RGyC< %_#a>_M^B6,=}{4}WOsbQWj}5=JyD@2g$y$.V]uRZ[2D5._6!sBXbswoaH' );
define( 'NONCE_SALT',       '=2PPv+(E3w,jIm2.Dl=`0M~}g<z(^0_CUl()a:d[cfK}J5>Hq7FePhRyhFJb_c:=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
