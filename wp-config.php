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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'iJo@sB%522q#6 Fhb9JCQ*>x;>k8b]*#;ru&=A}oa%?DQ1E8A?h`1cfDj-;2Xf5{' );
define( 'SECURE_AUTH_KEY',  'a8>tEE:K$yfMuUg[LWW+n2nx1Ky5:M8|bH7bnF,~GpN7&j``.+Z06:nqMo,hkju:' );
define( 'LOGGED_IN_KEY',    'Di5jnH$BS!DaWu&oaX7|wd.+_4ymv`tO6TnRp3)XW2pj^HLVT~v2K9l%7|@lRk+4' );
define( 'NONCE_KEY',        'ezlp)o$& 4&2Cx%*Xp}<{`>f6Y|A.ZijHFZK19~k^R4{!a/klC%%|wBR6qxY1M7G' );
define( 'AUTH_SALT',        '?8o3}/ZWJU*69p>1T*UPpN[%.){]*A0//G8prxB|cntrAJTj(*w!^L/>Z~^(rC0)' );
define( 'SECURE_AUTH_SALT', '-3`VK*9_4(lkPUl2[Hu*Q:(a7z_Zm5UpszuC=Q=We6UAN88>UC)tJ|dew%v4@or ' );
define( 'LOGGED_IN_SALT',   '`w+a{ZI7CIF_6nZV2n;C)6Tbii,Rg6-^ z2|/XRjO4[v/8P!1Fs;pHfedL)-rsXe' );
define( 'NONCE_SALT',       '(fCb!X9[e(PCv2!8G75tZC3saz$7~EM>xk*W4(yd2u;bu9)+H:[VAlCj?fb;8_6Z' );

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
