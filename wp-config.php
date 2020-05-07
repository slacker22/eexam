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
define( 'DB_NAME', 'lms' );

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
define( 'AUTH_KEY',         '+NdJH~}c[A;&Zgl2t}P8*=(_[1YW(EwQ,I:p<MM6b4a[<5U&yD#2H@/kdTSK3rM-' );
define( 'SECURE_AUTH_KEY',  'orxC|5&0Bs0XIR=2wV(GZ|s]0YoluGs>DRe,6H-TLAv~bN]1oe[X-~!yV;>m$0K=' );
define( 'LOGGED_IN_KEY',    'E1!ZR;0bRyf=U|w)w|p>}p]#7Pe+17V!y^L!dI5(Vt_1#*P$rSZD&F}D*Lcp7)(9' );
define( 'NONCE_KEY',        'X.6kYGdaK*y.LOr?^Uw#2<ZO6tr_LZ/L:iy;t|T43_*O5$h2}]>j03lDEtV1:O}1' );
define( 'AUTH_SALT',        'gN}|;j[Gw]E*v1 $f7^~<&)+!!;oRRggyo,J.+C_<J6}rlVT1)T(!X|*+GYqD=*4' );
define( 'SECURE_AUTH_SALT', 'qHeTKesd2nl3;D@IHmOVLYym{]=dSfiV[>IQfSbq7]%$q}}Vjm^u,u(`)]8*pPSh' );
define( 'LOGGED_IN_SALT',   '4K8+;6<9t9*NeFf ztZ9zfRGnh]EJEXx(+mITV!r/{sokF--,!RVGA&^@$+[h~o.' );
define( 'NONCE_SALT',       'xcC=+~ZsIE}d3pgW3*5^VrZ|cGF]cID8_O0Tu?}?NBs&*nsbsQ#J&~DabvcIG6F[' );

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
