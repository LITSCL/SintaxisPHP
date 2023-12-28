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
define( 'DB_NAME', 'dbawordpress6' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'I|eP%A)b?I~qv|)%[]jL?nmhcLI*P Q6$W#xaS[3_:nistWz$FeTiU.A_#:`Ef*o' );
define( 'SECURE_AUTH_KEY',  '-2sG9Ep1uqWu#;ovZ,fP { PcncUkK!esK7VuG#vI=o1hsD<gwv@k5koj)DeqBv/' );
define( 'LOGGED_IN_KEY',    'waoFP>]bx;Rnc/-i_x7P(;1IkPbR~n x)&p4C35MMUHbMFhY4P;#:?dp|O[^k6?=' );
define( 'NONCE_KEY',        '&<_c|nit#Hr&g^M2G3_v&omF;[2A#,g.7p.i?w/yh$D_.Q*2:4,z]wf` aW0n>7Q' );
define( 'AUTH_SALT',        'qn4>7sES;Fm^TyI9k8rm)Nm]*^&bRiP:TyryA&VqidOZ(xi4`IKB=eA0PO6L)uGn' );
define( 'SECURE_AUTH_SALT', 'luncC~)%x.IHWO(?bfH;iw3)+({ArOacW>7Bx_I4G jv_J!sR{4+l?!FhhEe6%#,' );
define( 'LOGGED_IN_SALT',   '<T]FeXh~[atqgeE$k%(e#Dwol|<:F-l?_:C1K(Qe=SfFOJlPp m>{aCd=H7dsLh8' );
define( 'NONCE_SALT',       '+8WA]kVcZ4`_BsLo#+;/s0>cDV99y~u2lze*wxD2EDXEPqw7?G-Lc.&TuzwDP7>d' );

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

define( 'WP_AUTO_UPDATE_CORE', false );
