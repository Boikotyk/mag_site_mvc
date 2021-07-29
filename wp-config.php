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
define( 'DB_NAME', 'avtoshrot' );

/** MySQL database username */
define( 'DB_USER', 'avtoshrot' );

/** MySQL database password */
define( 'DB_PASSWORD', 'parasolka050' );

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
define( 'AUTH_KEY',         '4ga#iM61n,(FjSYot{BrKz|h^sU;fqSKv|.]L~).|&Uhk<>F,4H] >A2_yvvih&/' );
define( 'SECURE_AUTH_KEY',  'lDX$y<:/iO;B?r4wo4nMjyscwwSQQB_p/sahE@K}$Y_tUBM&-_+((L~v@9A|0cfU' );
define( 'LOGGED_IN_KEY',    '/uTuJ#}[@6KN<W-=V/3UFR[Erk64g!|6kJ:R07qrKr!z0#42d4hE@o*)J#Q %c#O' );
define( 'NONCE_KEY',        '@G@ZM=#W^.P+B1XB%(Aw#5_[-u9!;(|*-{JOt,VaSDmsN/(d,q+wX8xnq.2VX;6P' );
define( 'AUTH_SALT',        '!I qF;aibvA[#?eny ~Xc(x/m#lRp:1TIRc.g:MjmxYf*!WM{8+`?fTV+3P; &T@' );
define( 'SECURE_AUTH_SALT', 'h<%@lu9NbQhe[Kw7{*fNG`p{ 4!2=&TE`Cv@RLfDb&fL&:$^eclwhKh3=I,pqmAp' );
define( 'LOGGED_IN_SALT',   'F_q$<Kt~s]}|*#<2tc!bC/N@ZC^Tvnh[l#`-gZa=dR?)i.:R>}`di%9_Tl_ucM[E' );
define( 'NONCE_SALT',       '0mQ9a@NFY3f)Nu<?OGNeh@#IxaZbXO@DRcX`V0T 0@3gIfq_G<yzF4TDSX0!W<;w' );

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
