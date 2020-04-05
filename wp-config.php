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
define( 'DB_NAME', 'wordpresszero' );

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
define( 'AUTH_KEY',         '{Y1[/.h=#HUi?eS=~;L9j3LFpWtbM*h[7X#P3H7U6=>Z{HKZj:<dC<P#GPS^6q/h' );
define( 'SECURE_AUTH_KEY',  '0QW={k5>wY%FGDy-ilSD8xefMa0lg/923`bJeoSO[(n,6/(H(Y];8 OODrqSCIPW' );
define( 'LOGGED_IN_KEY',    '`2bCUFyq_{[Ss7*cwg`BrZuIE[ZT 7>Bo;OX*i%w~^#r+zcz/w#Z=RU2,{]{ZWU4' );
define( 'NONCE_KEY',        'R:9Mm)-?PQ$}6u>zYyi7&L`#/uvm9C5b:QkyQ-6pK0a_Qp}`]xXmf4j#GeC60d~l' );
define( 'AUTH_SALT',        'N$;@4/*I*Sevbo(=A[7w3e5dU*ySVxu6WIXa{XNk^[#?CRa60@ZRf~>mEW/B#u U' );
define( 'SECURE_AUTH_SALT', 'N2, 0*I2/J,qmID|A+1Il4;Jj%1{=xW8;5g$zg$BGf?<QUs2oJ%a~LzE+4Md7|p:' );
define( 'LOGGED_IN_SALT',   'Cd[>p>$BCW0i/X.$g)3|MMw]hupb&UfP$@mx&zANUc,x7$UgHkt,ZSB|ITz8qNbV' );
define( 'NONCE_SALT',       'F:)`YA^Phdjo?$IO^`|?OS3yV}g#z`FD{C=WSS;v.>W{D_]_#`r^`JV gYjtW[ZO' );

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
