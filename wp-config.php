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
define( 'DB_NAME', 'brankovlahov_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'brankovlahov_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AkR4zhc2drFf' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql109.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Dk*M<[/7;uCD}+x%C;f:q~.-[5PXNZOA#|-wOkg+FK6aI{v~=Y-pGk4+Ah2y4@Z?');
define('SECURE_AUTH_KEY',  ' C{oC-_~x5yI;)+!Av8TDt3ljTXO498VRJ.:KT9VyjGQ34b:K4EjlXk5|exuWn)[');
define('LOGGED_IN_KEY',    'M#EBZBdia4e_(ZcFwU%Y!#.BBc?B!XVs]y+Ak?aPva{2}rh&!9ce++Qt4yzNZ`_2');
define('NONCE_KEY',        'N @OSC~8*TlOSc|peCwi#+0(J9ip|u-jHFc>dgeD<c=[a,f0F!8F&RR35=(+/l}[');
define('AUTH_SALT',        'AU+v4xHje.(|K.tpmDmE}>/$vj>5ahp,x:r2]/@u=e@Fe&T+8|=-](dix]:&5uZD');
define('SECURE_AUTH_SALT', 'g Subdno0vf1{Y,2P4v>DdU+at|9)!.ytv]5ghd}Fj^m!Sj3r0^Dd!Z#:_psN?U{');
define('LOGGED_IN_SALT',   'h)E,=QPx*]kbymUGA`2|i*^@yy~>-uPS=13_1D7[e<@-$+,Krwp#oWWEXi#*|NH-');
define('NONCE_SALT',       'MM6#dh)%(AXtpte1upqisQ1|g{j+9=dj[hs-7KK#BA+BQz{2<FIvfd%Ld3:kO74i');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'personalportfoliowp_';

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
