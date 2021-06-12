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
define( 'DB_NAME', 'bspinko' );

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
define( 'AUTH_KEY',         'oX12W&$4G} `wz?06qEp#5qMyQ6Wu4?TknRnAPU/mW(i;CS8V-9Xi4!Ur&nFYi[X' );
define( 'SECURE_AUTH_KEY',  'DAK*e.7u_Od0{eWE|hk2TLvky@U:LHg+54,2pj-Y>V!;@42m[,5_&E%x]k7%GS2p' );
define( 'LOGGED_IN_KEY',    'I6h<gNm28ND]&l8Jx(7NI ~SUkjlVqQ](M4^~p%/*m&&8{Aa62e%Q L|zX.x!yx6' );
define( 'NONCE_KEY',        'cJwS+a2trL@0Ua~kYH#;;j./$wrLX$cg/Bc(SdJW|QZvU}Vc%e>,B,kA/f%CHQN|' );
define( 'AUTH_SALT',        ',U3>#yA.8O+^_.x:+r3d=R-p3)Z=`|XRDZz=/2=n~s#o3#Ld$fFW=wH&vF*%Y=ur' );
define( 'SECURE_AUTH_SALT', '-h_jOYg~!*]`}[@2AN!bx*HiF@azNTyGQUEnpAmhZnt0jtzlV6`B-hkYB@5wIHT)' );
define( 'LOGGED_IN_SALT',   'B62nN/F(xl!mP~V5[6d2.z:Y<=wB+[ul}BScA<RWKiQE=MO7U@Zy;,cT*a:-)L&z' );
define( 'NONCE_SALT',       'WeXCkU&AdXixPx&%_p$i|qVK PuhE4~ *33rNw|T/5o+ezLMs:Y!Q3oc.d,up-GK' );

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
define('SITE_URL', 'http://localhost/softypinko/');
define('ASSETS_FOLDER', '../wp-content/themes/softypinko/assets/');
define('ASSETS_URL', 'http://localhost/softypinko/wp-content/themes/softypinko/assets/');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
