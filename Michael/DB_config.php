<?php
/**
 * The base configuration for wp
 *
 * 
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * 
 *
 * 
 *
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vwkytuue_w326' );

/** MySQL database username */
define( 'DB_USER', 'vwkytuue_w326' );

/** MySQL database password */
define( 'DB_PASSWORD', 'IX1XElxAhFZL' );

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
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xpql8vtzau1ofw6hjhpevrbnei7iegrancehbs3o1pv6uf4rkbleculqnszobexv' );
define( 'SECURE_AUTH_KEY',  'vs9ibmvuaathuj9pl8hifiz0vvz4kmhom2bvl35vwgbhk02pq5079g993a5z8zqs' );
define( 'LOGGED_IN_KEY',    '06miw9y8incpp8gqqflh4kvugqjre5yhfzsicxvdypn88gne0szzfj1bjvyd6adv' );
define( 'NONCE_KEY',        'jrce7cu9sf0epa8odi6hvni8pwg2xudie2ytw20mykcoj0hlthrbvbn4kdmwqe0i' );
define( 'AUTH_SALT',        'iaqok3cqaefct5w1mgaf7dkl4ekptnguycjew1chzdq5wir0kdlhhnbvpcadtjyo' );
define( 'SECURE_AUTH_SALT', 'od6ygck7ayxnubfzlurrt5shj1qstg4em54lzwmzolagxfg6xtirnzo6ojomtcr2' );
define( 'LOGGED_IN_SALT',   'm0yp1lmak2bjgkp7rismkxq3jjupjt9g8ylbmj5shl7xttiukkycpbpidmvcaay8' );
define( 'NONCE_SALT',       'm65d17sn5qat19wsdbut5nfy3a7grkmjasizqb4m5slgl1kct8m1qvbvfkhcjv9j' );

/**#@-*/

/**
 * Server Database Table prefix.
 *
 * You can have multiple installations in one database
 * 
 */
$table_prefix = 'wpwn_';

/**
 * For developers: Debugging mode.
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
