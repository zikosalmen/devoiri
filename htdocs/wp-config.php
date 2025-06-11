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
define( 'DB_NAME', 'if0_39175937_wp461' );

/** Database username */
define( 'DB_USER', '39175937_1' );

/** Database password */
define( 'DB_PASSWORD', 'b83EpS2G))' );

/** Database hostname */
define( 'DB_HOST', 'sql210.byetcluster.com' );

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
define( 'AUTH_KEY',         'qacrv7pih0m5amzqvd0rc94acfmiutbxck7lms9ezpv5fdb4pfscumj8bbteey29' );
define( 'SECURE_AUTH_KEY',  'ex7bj70z5efmsrefrkqesqb2xu7a7y42sdggd1s1r0jy3dmc2tgk6fuwyr1qc1da' );
define( 'LOGGED_IN_KEY',    '95dlz0vzfscgnnnad1osxhshpcmanafa1manv6tbg87k7yxpr1nntitg8uhjufvi' );
define( 'NONCE_KEY',        'hj4uuehcmtki2ioelo85zqk4yzjay2ujfh6k4gzq8tycoae8berpicdnmor5vo1p' );
define( 'AUTH_SALT',        'tsrv7fyjfnqmtegdiylwzuhpmusxmlnlg8i7o1scfpj8piwn7gfobx2cegrpuiov' );
define( 'SECURE_AUTH_SALT', '1ojsngk8bfs1y0baxyqg5zot5intekdrpx0ahppewezyiovgesqmuclwvfmlhi4p' );
define( 'LOGGED_IN_SALT',   'sxglpyg9uuuxcedbgyzh2dizjuoqr5l08cnt2l2w3k3xl1hinnkh8s7giyilkodl' );
define( 'NONCE_SALT',       'h0egigbu8fcgnosxmqiileymk5w4zbyfoswxqtpnusl7fehcxxxg6v2a1emfqrhp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wppl_';

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
