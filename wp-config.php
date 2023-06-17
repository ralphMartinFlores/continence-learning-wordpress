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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Continence-Learning' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'E8cEVKyoWrw6LDZqodNc7npTH5SQSbNvfpNj83J5LlBlXc4EZ4DVqKmrkftSzFVC' );
define( 'SECURE_AUTH_KEY',  'QdhgLkA4AKBEsLqfqpTx3pSGB5BuHAmYfDuvYghsu3dI4hMLIVE8zZ9geWZpGu0H' );
define( 'LOGGED_IN_KEY',    'eJs3d6GfRZtI8cNQK1Cg0I4e0w27KIyAvgSiy5PH9rifjuIK4INX2NZRLnpoYwjs' );
define( 'NONCE_KEY',        'P53jtnHUvP7XbaNPdsdzh0lMSVVKYgqhEhHHTsIMOl1Lu4NAXsu8Q0FW1R0U4CcB' );
define( 'AUTH_SALT',        'NTEGh9OPuy1q9L5fwO00S2xYWl0S9JFSYEtODa6bAXEq1hpH8zJcMsDC3mabkw5p' );
define( 'SECURE_AUTH_SALT', 'C3CrjWIXvYnPAhHA97B43yWvPIwAwHdD25IPJ8k8hm1X7cCmBfXGZm9b1RfedFEW' );
define( 'LOGGED_IN_SALT',   'O9H40wKCaisohp9qahIoXAqjIIfem7L72jo3AlTvZ4Ckchltj8YS9BTZUxMLluR3' );
define( 'NONCE_SALT',       '5qn4x7rrDUUdaYwtwiDiRkVdimvzBo2e441NTv1ZNTW9toRFVS3dha4R0Wm0OTdu' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
