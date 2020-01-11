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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '221expressPl_db' );

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
define( 'AUTH_KEY',         ' ?3|!,r |sGj.@GGJd+3~l2c!N@cC0n~,Kbl#b~>U80_XH9e#@{=so|Wow|bCtPf' );
define( 'SECURE_AUTH_KEY',  'h~;6k.i1f;`&~9KUMFN1kmgPe7d-_YJt0#|TRg@4ku!T#4KNwPehO}nC@u%u^tYP' );
define( 'LOGGED_IN_KEY',    '|x:-(Y/3M^)|EzR]*l2vS[!Hn*TE3Bw$Xk[<Nx=:A/Vj(YI,KBb0 <qJ>W-qW2fr' );
define( 'NONCE_KEY',        '*1EP9=(Eb+zDp.m:,K}T?CBu[JO;XQuilm}eKA}-=#MAl>OZbvOczN&|6@wQ9H^8' );
define( 'AUTH_SALT',        '<}_k7Tf*90_b.GY|5N>L2c?kZ{6]rDg%-x0t@b_T[|&uns96cJT%HKtXp(d|Ghv@' );
define( 'SECURE_AUTH_SALT', ':MT;<L4fN3 WUJiY`ul;`UCA42IvzpZz$c:<E@29[#k~R|%Tt{#0z~10Y}%SYBhK' );
define( 'LOGGED_IN_SALT',   '|),}fZ#E!}HAD96v4>8<Vp/a&E4VZm/>eR/W&rj^64p.wi070i57eB $%nlnK8C>' );
define( 'NONCE_SALT',       '8oJ.A5nbHV^n6[? F]jV9OS?(@JAw4si*No]ywzpwQoMH7a2?b`&1x ]BnE_aks$' );

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
