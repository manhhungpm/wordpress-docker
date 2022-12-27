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
define( 'DB_NAME', getenv('DB_NAME') );

/** Database username */
define( 'DB_USER', getenv('DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('DB_HOST') );

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
define( 'AUTH_KEY',         '@@vH]CwdlCYg4?uLU$y!q~ )1NCa_WR4sE 3z=/ug:A;#2.J8Q_snbGBKBdZ3&D&' );
define( 'SECURE_AUTH_KEY',  '`sGR|1$`=HrQ0Dhpyr*EaNY&`Pg1z)yE#<rS>_3U%IXQ|9VxEjCFQAA+Gp0[MbIn' );
define( 'LOGGED_IN_KEY',    '.@6S#I/~N%l/T5xR[+>^ef@ro)tkGXbE_@+9?J{LyLvi0Xv)}.;BA`{~.D0*`P2k' );
define( 'NONCE_KEY',        '!udu}$MMAE2qvO[Na{lAhq^h-7`P)W^zn+nbfRbvUqFF:Cq~/:iX.5rqC^MWQh&_' );
define( 'AUTH_SALT',        '9CoZE<8G>6(Y8V(U7lyu_.#nBL^vHvjYM?SGx&gqaRv6.R,[/ITNL 7R))xcakO>' );
define( 'SECURE_AUTH_SALT', '/7*{-rS=M2SN9h~IoexX;.M:]S>+[y~+50O&jr<(Aje,J`Vd ltPsw-hrV}{U4~8' );
define( 'LOGGED_IN_SALT',   '_~u5F k?XJuKb$:ZPv1YH3&s/v-^10;2>sTf_;i{Hcx7H6,_:T#9ig(|l.CG7tT<' );
define( 'NONCE_SALT',       'YpX3#z<M{W-v)3aV;wmLC27lJp1Ux7$?,9L+1Z2Y~Xy{9~NgM?!UEA$2)c:9#`%k' );

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
