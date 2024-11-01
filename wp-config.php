<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mi_sitio_db' );

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
define( 'AUTH_KEY',         '#&&q.6pM?2Nr$XY!+~L$zPDf5BPJqcOouyf,+[z-x)I!q]=PDw(aztJ^ZNd[vDw:' );
define( 'SECURE_AUTH_KEY',  '9pbgzI|3Mv:!Gymr>G[1}*)85mI:sxG:o&9K2;s%J-z?kY~Z1/g|V`!lf~!Zg4NO' );
define( 'LOGGED_IN_KEY',    '7YA>[]hKx^LHd4{KMQTu<M{IdSH<(3p(Jetp}Wg<,Z|wDJ?Ou8>*[e-x_e%}Il* ' );
define( 'NONCE_KEY',        '4NJ}k7yZ(:ihg^w)^|tv~kcjVwZK@/Y_A-ga e co(qSO4<3`AJ[;C>p&KQB8axY' );
define( 'AUTH_SALT',        'B|yzv@[:fE%.OE59}3irp*D{od coAYC?|~7H3Sgqr5JCqacupMeJ{P}N~CfU)]Z' );
define( 'SECURE_AUTH_SALT', 't_kPNzfk up&Mf>[d@4 +%XH6=l?#pN5hr]W{q93[yJ=e[erwu&Zk,i +UkuW<q2' );
define( 'LOGGED_IN_SALT',   'im)uxR*v28KwtQw$F~~:7hrLH-C*mN-~92Z1p+R(RB$aWGlBfcxwI+jY?X1B26?F' );
define( 'NONCE_SALT',       'ex,w2~?Z!c$|^!T$u:~!5qlQ%FHwxL~}bP3*IRA_5eS>TVV9W#$ n@;`*29u9TY(' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
