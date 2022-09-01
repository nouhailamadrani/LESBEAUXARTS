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
define( 'DB_NAME', 'lesbeauxarts' );

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
define( 'AUTH_KEY',         '4SR3kYlflqed3lDBYvqd62DU2QZmIQHBCzttD5ykz5eTTI2ZWkHhPfuJRss94zPJ' );
define( 'SECURE_AUTH_KEY',  'qQ8z22tHUFxd4MweS6r7vmX4eVrqfuy2FElKyOUH03D0PrV0iW7U7sjZx54PnsDn' );
define( 'LOGGED_IN_KEY',    'ixUYlI8NBpyHKIGTyaB6AJSwMPoexSIP7YXL0wb0GiHf6WOoDX9XMR8AhLJSHNfY' );
define( 'NONCE_KEY',        'ycOesbSpX2hjGgD3E9purzRfkmJZgITkv72YuvM4fP2dlCd5daWGoDbrYDQpgNw7' );
define( 'AUTH_SALT',        'XZpPyTQ5zVZVtVKi18YK1NMgIAXDfyotXG7LNckxP0W2G8ZluDZNzcH4TG4TgpHn' );
define( 'SECURE_AUTH_SALT', 'ZoQPDxGWfWxrFXy3mfCpvutoqxNRjsf7FXfS2FJssChgmUi2w61pZ2YLInEbZuCd' );
define( 'LOGGED_IN_SALT',   'Kjcc8lVVr4yBV2faFIgJHkSPEfCShx7dGRylGGph4SWniPHC8ScKbA4hkaFmx45p' );
define( 'NONCE_SALT',       'ScFqoViqh4hTqHJMn5zvDDlwRCNQH3Y3DBj17YpzGqQkdUDEXSaNlvp4Ta92ki09' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
