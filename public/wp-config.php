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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't+O+i9J3xCoMHt9JR4hMjyP2TRbIfDdXzyS9cubGsh2OlQ7Uvt7dm1TzyxL/ZM1bGvGuPRlLvegW5SuqLuFh6A==');
define('SECURE_AUTH_KEY',  'swVmtgrJLKaCf3QOJmRFTK5qrgLUSRvpOlI6Q3YbUN/CfwKyRatXTMqDSN9qxYHPK3euyvm7dmmdDPFtsr78Kw==');
define('LOGGED_IN_KEY',    'A3gfEdYIf5IFm5P32/OK5BvWV4SfrXplOduVCypHPB45jQDwavzxlGjzHQ3zNBC5mqtGS2nOSGMw8R/UmsaPVQ==');
define('NONCE_KEY',        'xIEH3H9ujVEC258g93bVg66wPEItcgf6krfg4C3VqPB5Vn7ke86AYCAXMnvI4BZ5TbFl0DFLviVtzeZuxuknFA==');
define('AUTH_SALT',        'VbSY+yxIZ0AzxYPoVOhybbsDnaRAjNlOR8Pu0bF06Pr7ChyuI71AJVfW2PNsMeKWNsQniY4UL7tIRTwDI3OCTw==');
define('SECURE_AUTH_SALT', 'SsNIcErYc8H0691fZ1gc9kvGZXWGCf20UdFOtxmdEuo2YgqFu03pgX3LYn7+Mk8Fd2smaRCes/nDqS4fApt9gA==');
define('LOGGED_IN_SALT',   'ytk67TBl81LqrnGN2T0ovnb8ebwndIS1ITbbRX449t3HpZN+rV1ErmdmXionKl9l5rEMPqLZ1yeLYvu4djeRMA==');
define('NONCE_SALT',       'tq5Kpg7k8eBYXxcPnCxijKqVr9hZ9CMk6h1KKniTdy+kfIkMRVUA78EWgZGvtNMlSpPoCPnXb+4SGrKBFLg3VA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
