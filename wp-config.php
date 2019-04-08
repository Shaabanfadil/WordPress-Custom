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
define( 'DB_NAME', 'university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8Hb;dz>B5rg2jEVs},u]}TVaAa@pPT8snN$c]T:@Zh>DUV%s5]VO![CT~9r?)c=T' );
define( 'SECURE_AUTH_KEY',  'X*i_cD>cfvI*H~fpW2wLs2f={kmPI,#/OJAM3c7Gq#@cE6a4@q]4g`F*{-FcQ9F9' );
define( 'LOGGED_IN_KEY',    '1Xcy<pS!.D#DCzmPlMc4WKz9SDjlzJ^w/a#H#(6S`T?l&C>K/QG=3y}fH9 -BP$a' );
define( 'NONCE_KEY',        'II83c(-u*v)H(Wm,`(a8l9.qlEBQH)!hbTt%ivd2f,GjlzQ$h&!W7Q<NW4sNjW-[' );
define( 'AUTH_SALT',        '%]U^axk1hfnxlF1T>D.$~u)q_2>,4HRhU0VG?*){2ja.E%@v?fd6Gqlbd*5e?_M_' );
define( 'SECURE_AUTH_SALT', 'R.BI%wcE)2RsU!}Rg$A{@gHl2L|fSRPxiJ*+3y{Lv6m]_!d<,MLDz4PZadH&6F5:' );
define( 'LOGGED_IN_SALT',   '9g0;660q[x^Gs]/>o%*.12 &E|rblKCSs*qxS}|kkj<fXO{4xjtI/-_5E1]aTr:k' );
define( 'NONCE_SALT',       'X:YN9n7r;]ugRE%vs!fPj(:l)v3{RbkW}bsqk_X]zfbB*bc=+S4U2[xwZaUXyEa&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'uv_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
