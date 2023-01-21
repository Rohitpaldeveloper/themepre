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
define( 'DB_NAME', 'themepre' );

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
define( 'AUTH_KEY',         '+]W%<7e%8?Up`N_),p0a0#Bb!3=rV>?%!pae:HT={Ajm:*^X|*,W:r<#FY4@_6/l' );
define( 'SECURE_AUTH_KEY',  'RFr74 25+HDAS]ByVL%$/*~t}Bgez8W}7+w)Ee+c 3FLo0xbAoL(ijLj8$#-c6p<' );
define( 'LOGGED_IN_KEY',    '#J+(BXA~U1Lti}g<.,HHf`0]1&EE)8!za0P6W ~XX j!5ZS/_G<AE{p6KoMLS;Dz' );
define( 'NONCE_KEY',        'vm6x8XrApA+<1dp#Tal=,BRO@,fDx|;Z3+G|7_qf?ot p6@i0(0d~R}e*x_:K1K0' );
define( 'AUTH_SALT',        '8hHn|*Igoq$>-!2}73d@2{nlDR4j4d~Dq-CaZN$/-IT00lkKIZ~sp{yok O|sPc<' );
define( 'SECURE_AUTH_SALT', 'f0Ih=!PQv[4s7EZtK*aocCP_|)+E1M_&70b~s6mqC4N^ay2e@R7cHnVmS}gD1q&b' );
define( 'LOGGED_IN_SALT',   'G<:IBP<QNp>6`*z]tm;a:Xv!CY:kF<L$S!P6Qxo3@838q h_v9%|W=~.7l9Ac(Ic' );
define( 'NONCE_SALT',       'f1ng/ =A 2%4`bzZsLgx QBFu];8wjdNjh8;.o_tN~PzK}4Qbg]ewAFL.]]TJ!p8' );

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
define( 'WP_DEBUG_LOG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
