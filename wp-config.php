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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '0PJpVjzMmcUn9GpCT8FxqbUb+UOn8XJhadUxQfYmoN6UpcWh8gu3VZV6ppz/ypIcx1Ejnc0/r01TabxACDNhuA==');
define('SECURE_AUTH_KEY',  'mag6OWUwwFrGcFcTtDRvSLQuUzMyvQpS0celJBdyWyN0LkZ/MAemm9zZ1GwCx2+M/PJiFw9OZ/rP9sXUd9c1FQ==');
define('LOGGED_IN_KEY',    'XLoFwwQSKpyhkBfhsgOH48qqEFcgizkiYGXoczMuOQPzVAt5OMSybFS7GxU71vm15tL85OiVDgwaxLJGMtC7cQ==');
define('NONCE_KEY',        'dvjo9nGOTJGmv2DWJA3fERAWu0fhHhWgoajUwIeGz6wIx2BC1lno1fIqCksOXfHa0tulF2QkcAbzjKiqrumIoQ==');
define('AUTH_SALT',        'J5fgHt70TOIJn/z4YJYn2hoBBlkEcnf5NQVz1kE1lSczaLmTo3B/OxFJm7RIOsZnERECMIri4i9p/Hwbt7az3g==');
define('SECURE_AUTH_SALT', 'fBDEUAVFucNSE2N/fPLqbWNlQ3wzfj1gUVn1K477CSaJ9FgHIbxTlyk4ZN0pkOh5+lA1ULQKIWVtsG/O2Qrgrw==');
define('LOGGED_IN_SALT',   'mOpako1IJiH5SeECRN38CnbpHCpBQU+RbJu5CC24C2cCDv8mV4TeebYR7WnNC71fGxTfPyRKAyWWbL36ozFLFQ==');
define('NONCE_SALT',       'OuYtC/xT4EemrJwzjXnVEg1UoHikH2qkDa6CScCr7vBmd27rIIoFlHfX8svTHMgb80qebtcBKLdmf9qG9pP4lg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
