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
define( 'DB_NAME', 'Acens' );

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
define( 'AUTH_KEY',         '<fRW7X?E3~+Xlt~6Q&`8fB{MO:XY~G6zor{k7euo`Q@LDI[ZI|0-8ZZ.m</!{f)k' );
define( 'SECURE_AUTH_KEY',  'P<(7!^rC{rfv^zbCcfQ+ye9x%(prlYjr<0~BV#RlAS;F!SE/ (QvLqOaNbE=pp+l' );
define( 'LOGGED_IN_KEY',    '~q@zs FyPEH.Qq$F#O[ 8C8qH[B~4u M[krZ$>6]_qpxZX[e?th->)ptwko01X~+' );
define( 'NONCE_KEY',        ']KR|X-RDEeZ[v}1kh(B65rpzWbTh>h_$Fa8Rs@p>KfG(a1<@^ntd;m-X@pDvLUS:' );
define( 'AUTH_SALT',        'T}piNZ^5X?_h3%0 lfkt$U.[*fBFM<M`|E#hj]gICy)nxac(9M3-^9>Gjtb!aqTo' );
define( 'SECURE_AUTH_SALT', 'VI)HrLWWdYf69Ab(#~/4A@]BKcG[CT)+L37QvJ@j/N#Z.ziUa,s3i`E>mpJoafXM' );
define( 'LOGGED_IN_SALT',   ';W=>_mPX~D[W6 R,m]:l<m8Bajc-3gcy}0(Ny1ipdD|As $hL7%nT[s$!g*@HsUt' );
define( 'NONCE_SALT',       '7mlAX31=|Xb67apr`X6@?;]KWgR[i6c,au4H/$|^;i%moJ2Z187+`qQY!oCIfM]]' );

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
