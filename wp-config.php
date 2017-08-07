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
define('DB_NAME', 'titan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g/3i9G:l) (X[9e&4cuLZp>(tOvypL2d_|=2IQRA=@XI*k:)a,=1Ze_5#hQWuo!Q');
define('SECURE_AUTH_KEY',  ';bcW$n=cKrp}Jr@RzpZC`=C3(o  ^y_B[7fYy>;c^ik,.+;K5,2a]GEHqygUwvIH');
define('LOGGED_IN_KEY',    'f6qcx>`tR#Cz2VV=CD_^YFBW!%v-;?J)VOgcZwXs9::Sx4C2#GOTi*0m>)Z{TaE?');
define('NONCE_KEY',        'u?$Y|,FthYuV7aPTN7}+!FLL{yw|9KUsj=gp_w@pX~c4)#ui8p2 z%itj;sZrc#/');
define('AUTH_SALT',        'jOUrPUTE((#K#)X$$>:y zBF8wow@kJ}G>K0uXu~6T4EZO&I,wgnsWU>ZGRyEG_k');
define('SECURE_AUTH_SALT', '@.GU,+>eBpW^V,_y:lGB&AJL<??]9}Nm}#tJ)]=sHMR&X1ON%^`shJv5,B4mT~+V');
define('LOGGED_IN_SALT',   '!Ab{HCxCg^M]);vtf!!HGw^%%,.YE8UhueC^wKBLDTCUI@UPzaD>B}yV6l(jt8}t');
define('NONCE_SALT',       '%8[xHqr9FO<7_fduy6ry^_DhbOws,^bs`F?L; o{p#1g3DX9dKOx3zkNn.`F>H[)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpT_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
