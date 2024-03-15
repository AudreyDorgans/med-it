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
define( 'DB_NAME', 'med-it' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'FU=+!$QAEKI+0]lUqxTViQ7pxi9DPQroCfIN=QHVSs>eSQend0+(p))-5D!|y(EW' );
define( 'SECURE_AUTH_KEY',  '4e,pwC|TW:/hZU7(eP%6i%R3~CzBl_W_[El43$sR?*PdkyE=3TB|8O/VW`,=o4AR' );
define( 'LOGGED_IN_KEY',    'yD[];rh%=@iMDJ7^T:HyN@|7oSk(1x+0((6Oo|%I`7pdlm H=3/9O1zZ$*r@b6+s' );
define( 'NONCE_KEY',        '?Fz>78kaK;6)%K! UHSg_A{U;1#KBMgk*Pn@(h{1DiG!a1A!~r2[U/bt!XD*u5gp' );
define( 'AUTH_SALT',        'x0bM&::5+O`.z]G?ce$A!(%W&.aoB+nY~}EZ ,Fa`k3:jaE7{%)uZg#C<RB4jJf$' );
define( 'SECURE_AUTH_SALT', '6w]7uoKVz$1~j#hpbx{ TU4Pmm..}&<}5 kIPp95v-%@`V)]k/-,9r`l1Y1!_@Pt' );
define( 'LOGGED_IN_SALT',   '-ThhIU%G>qhjJz4+.k|bd>|m%):dHQ?~#i0C<E2{w& -ZnPudh/z!$C-`(!8mnE6' );
define( 'NONCE_SALT',       'rF Lu@P72JL{@*BU^pW+RT@wJEHTh)zJJ#`e8=rYel_>O~]0huz}DMJ-+uUjk8ke' );

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
