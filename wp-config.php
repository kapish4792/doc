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
define( 'DB_NAME', 'horizonpediatrics' );

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
define( 'AUTH_KEY',         'X4UJLO}Tft{N+QA+_W%ej0-oB35Y]U-Tn7]a{iO<t3Uha:8edd>q1@N98w=R@R^E' );
define( 'SECURE_AUTH_KEY',  'Z;>L-WfAXPs_Qi,^<27L_w,N09-ua[IL3=4U`U&nV)P{lSq5|]$k^85[yYCk5R^_' );
define( 'LOGGED_IN_KEY',    '&`eob^.*h8^n)Cnc}Vg8Uo-hV~)XZaaNN&0n1f{MsK&}F=EC5~|@%4HaiW2qX{_;' );
define( 'NONCE_KEY',        '=gAb}$~e#kp +<<o+o|RiS t$bnH<SvPC/c5{ERC@?H9}Qe]=KaQq4GW%c1R!.ty' );
define( 'AUTH_SALT',        '~/$x=}s9`y5F[Ue:2xXYD3rkl?MeJyPe1e>`<U}$pa):ET*q ^GeK=@-r&n=#:~u' );
define( 'SECURE_AUTH_SALT', 'pNUhv!H+x =Y!gZHG_`6T~yywCW/FCn#tjz]&:6![51&#R1ltjOY0Z`05!E|/}O1' );
define( 'LOGGED_IN_SALT',   'bYMg (_ YNl`IbD~f_o~3Zmzm]Ipb$?,m&Xpt0J@,pS| zq>Q{cGlb?ukpRO`;K(' );
define( 'NONCE_SALT',       'Z_+!@mnib=KtoqA^#Wsnd*BV!*gLP!.~{bE+ec}I1IIBT4)797=vVnb)/[ZNZgbi' );

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
