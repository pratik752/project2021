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
define( 'DB_NAME', 'Diviecom' );

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
define( 'AUTH_KEY',         'A_~ik.9JKRcx$q:#oihbn#ak1mhaPt.T``n23*!MjW;.NzVBG(Q!2HIGyn|rkc4D' );
define( 'SECURE_AUTH_KEY',  'WhnY|C3`z8u)hM^_?Wmgt1miK_qfrFE5}qnj6{J4 hZ)]e*AH6ETaVktyq,t8z) ' );
define( 'LOGGED_IN_KEY',    '4e/L*TS&.}D.Z0%J5o-UVo.FQ6[%ZN}eMgd(NdjB}yDj@v5.T;_1zf/s[5rR^Evs' );
define( 'NONCE_KEY',        'xKVK=6ZkM<!yG;),C93#N`Vj1hp5uw45)o~3z#%q|d6o0(`LmTUxys7jgx!E Yr~' );
define( 'AUTH_SALT',        'r~-1R^v::1aDj:R8gsi#U&BxaOx(/IV@t,#Gq$(t1o^`qfxRb}#]b/[{4kB?f:3E' );
define( 'SECURE_AUTH_SALT', '5pjdqr$o8mi*ZwDFfXFze.gtM@LVpBt{JX%~X-7U1`wMD#tKZQEJt]:GPDk5?iVA' );
define( 'LOGGED_IN_SALT',   'gc3O_XnE|L^oSyf|kG.$b_dU S 4)j2jjHrv;zeEHp[_fc;:-:dW86eL<|[?6PPY' );
define( 'NONCE_SALT',       'mmCKKFf):9,EiTClC]NQ)/Q; kS0g.[oM,{]v9w[+cJ;,Mc*tV?Pt?B&pM)){Svk' );

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
