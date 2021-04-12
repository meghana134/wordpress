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
define( 'DB_NAME', 'word3' );

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
define( 'AUTH_KEY',         'DX|?FL:2k<si0jWXmpJ[$r_6E;nu$p6S9$&`Y(BxsfPg7hOF)nVJ1:Fo!J7D5[(r' );
define( 'SECURE_AUTH_KEY',  'N(+Qo8B/hne-|$t/+z+#*TMGxCPqVhbgb5jvysc{Il!4=O(E{%&EZU9]h>F2XW$w' );
define( 'LOGGED_IN_KEY',    ')2M@NPq;R0u YQ6>;wOx<o<V=L%sSd-f3:9=a2<r)c|6L/%<n hO$R<[#tH=9NOv' );
define( 'NONCE_KEY',        'dl/!VI^oiVgf$2M9iiI#/B;6JYf0><x?r2c E|z5=3lzunk/;+VP9O_7h6kq6j_e' );
define( 'AUTH_SALT',        'e*nxFzNgr}ei v49+D5uB:]0Q!WU(]jd`K{*,;ZQ[u3I-:8%ar-|}YQNMI~<^)]^' );
define( 'SECURE_AUTH_SALT', '&-Tv+UMW9}/MA89| =mScgrc;^%9A1&=?OF3b/M&62C-D=7*Rs`1yUn~+4QMB)Lm' );
define( 'LOGGED_IN_SALT',   '3OQtfH6M)P][;l%&I$_4@GtU0P|z{Y)9Wo$<0e4Y9In={NP%lFKIY&Tibj(?zH)u' );
define( 'NONCE_SALT',       'GoqP|cP0t1:O1Ss53v^$Aj/og-s9n<j[n.0gaJ{=|{8wmx4RZ:/I9-KAMV? ~V/N' );

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
