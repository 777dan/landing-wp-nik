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
define( 'DB_NAME', 'gbua_x_danyaf79' );

/** Database username */
define( 'DB_USER', 'gbua_x_danyaf79' );

/** Database password */
define( 'DB_PASSWORD', '26a26778aghj' );

/** Database hostname */
define( 'DB_HOST', 'mysql314.1gb.ua' );

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
define( 'AUTH_KEY',         'H3P=Uvw^1bURmxl{gMO!vB9l/~$7d4RyGI<fY@DcHw>ko8bvfQN>h7/}L/f/v3tH' );
define( 'SECURE_AUTH_KEY',  'Pt.7!D(GoLN+RewJ!IRi8gLoT%9*LA$+;Fp-xdFG ` Qr-.qvw|I6EaEUBO3`31e' );
define( 'LOGGED_IN_KEY',    'nvN %=F8W|*q[y^CG73<-|FUp>Vag6rd]4s/ZY|d<rO4fG3P*g)6m=sqW>Xed{6_' );
define( 'NONCE_KEY',        '3mv_Hh%7Yb*92a1)PW^dFO,lzy@02(jbk <(AsB.;GpFmu?k{/W,=}/}?b~%eI<3' );
define( 'AUTH_SALT',        'i4Z<A6I4PW6NA)^T*b0>8}n;2~Px1OzmK[5Tp>}mzM{~B=Q>mo__10?[b>Xi=lnc' );
define( 'SECURE_AUTH_SALT', 'A90XCOI[QV7~U)lW=2]6/OHj@R%_11Cm`kUWLw9w?C)b?p9.3Jf3T1<d)t _N4td' );
define( 'LOGGED_IN_SALT',   'JW*aleUEHK|]7+wUt{U9KDFyIGXVpzr,o,SC$wbARNPObo`1O`tI{ ;Lc~HaEMRh' );
define( 'NONCE_SALT',       '-V^Zd2&BMYP<$I+Ttc%$0jZic/HCufr+(LcZ1W8Vj_HUXFYQKxNJFnB}orl(Nq*j' );

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
