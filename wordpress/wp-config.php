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
define( 'DB_NAME', 'db_seminar' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Persema087' );

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
define( 'AUTH_KEY',         '8n-wlDNXkCk&EOR324xhGjVl2x#V{ZMIw9-Q=*xBQI;x.]2oHwV:<rl6dbI=Z_(4' );
define( 'SECURE_AUTH_KEY',  '9/CX3@0!s]Hh&QCO`m:Pd7`mDXD<Hr*NnT;.barw_?v0cQ]RLN]yOzxM,&2p475!' );
define( 'LOGGED_IN_KEY',    'wXblF|(>5HDO6IGH+:XBSN?^BFE&OI_ceaDA?USVPs_#*$sIi3$#yB.I(Bg[@SzL' );
define( 'NONCE_KEY',        'm,;erB>(:)28n2b`03yd[is5*%q>|]WDOd@VZ}vN2T/`Cj:cSl J~-k*ekgZJoc+' );
define( 'AUTH_SALT',        'P`8,&_;5XMxLjs>r(_FS#XBlEnpd(k[XiS?V^+I;Hsx%MnMNLTXVQvodbwh>wy;M' );
define( 'SECURE_AUTH_SALT', 'o`;,_Rqib{dMU[vtz#4Qo?2>F%ejYO:P&]Vxgg2!Lgp@F9@fD}z`axC8XWgQ8Ukd' );
define( 'LOGGED_IN_SALT',   'o0aU|Y-5^*4/.4h=29Jf521=q[4beRzcU$P$#f{q^P6*qRS$vLK7:(Wf3=X&yQGX' );
define( 'NONCE_SALT',       '>Ha[Ef,Zwa%{ahH==0##;r{]7_Car=6dPHCi4mQ93i+J-#:WC}|6pfCsj$+m~Ch~' );

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
