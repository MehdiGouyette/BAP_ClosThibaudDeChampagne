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
define('DB_NAME', 'clos-thibaud');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '6pP1.>RH-}uS=i}J5Y<4DZ6I94F0(SO8&<<</Gs:| D*?-@v0eTZuv;M`!c(/`2h');
define('SECURE_AUTH_KEY',  'MxH9`mM`R&<g77+I [.m??A}1~0<>Qa4{+!65i/G]X=+WhZ:c=@SBU<);S$%cw{1');
define('LOGGED_IN_KEY',    'bXXVO%SFAqDM+z6g|Tu0jd|9J,@0)yUz%/|Jq:*9?g<?&}lk<k[{94sfYpJs=:<T');
define('NONCE_KEY',        'H@-+{4:~ylay2f+8 e-^O+cAtQRA@LNSFh9QoDsiV^*Ff1m^>t+tUR^GM=*-y0^@');
define('AUTH_SALT',        'O0Mxw=X?HB2{.*zTLKK{1I+{vdD{Mnh=29+z<FLtaE0224MKfeo/SC|#;mSk3N6(');
define('SECURE_AUTH_SALT', '|3zm>E3qI~Y9[JiCj:W%>d5L5Nw<k>w0}*~n:U+s!9S:jkc0SU:SC-GD!6j6U:@Q');
define('LOGGED_IN_SALT',   'XgT+5c5u]+#kz^.|O$~a3aWgEQt[h0wZG1i/A&on-/4,Cu&h$SWxPAH)}I1vLqZu');
define('NONCE_SALT',       '<8g{R|l`o],aX+j|i&Jk~Qj4@(RG/?$-kCI+cLXW_5[:hsNl2q?N|fI36l!Cjx&1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'closthibaud_';

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
