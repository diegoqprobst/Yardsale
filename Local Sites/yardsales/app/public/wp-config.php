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
define('AUTH_KEY',         'zzI7/rZaBs7V36DcbywZ0gBYhesVfNq8synVh2qgWwUkdvb2Z16NPousDKsYr3U1v66SfXJn1RoNLgN1DNdjLw==');
define('SECURE_AUTH_KEY',  'nYjqpWwGPCsQjj7uR+2DiWMUjC1ad+wrFtFxo31jI7OfOcWRReQcgk2uooTaSQMyOIbTF2jrV4c0DeTKEuB+Rw==');
define('LOGGED_IN_KEY',    '2LYJqkAkOkzoiz/RaMonIhCtlJby+GwwJy/LqCf0lIb2KnMV8W1Hsawv7jjkPXbAFJwvv/rDRF3SsPHMPADOaQ==');
define('NONCE_KEY',        'LEf9g//WGZ6TnSHUBhNApukTKlGLK/C9Wb+QewcGEeCUxnpFAgn2cEyCVIvBJjZMgwD7Xi10srEHj+WQprkUBQ==');
define('AUTH_SALT',        '73aMI3ySe/AKKc0/FxIvHQxfn7ERmtSo+n/Y0I4P6Tt0wJ95UA3h7260rspAjltMqctBCT+rbgaxPM+BciJtHw==');
define('SECURE_AUTH_SALT', 'T0+dQq6D8mkO5az0IbhhJyfM2K7jxnfvubMNvffJqyV19Hf0ajIXingOeFIs4CAxplwSS2cpV0Ai27RFuOswNQ==');
define('LOGGED_IN_SALT',   'c/2GcVoYfdwc9hIkHIN53/1abLR111kgMLPAIarPAzZXfe/wL2Lnxtg9DiHo7kjG7HHefNKtt1jVtwnToSUtxQ==');
define('NONCE_SALT',       'EMhZXO2AY1Gl/4zFxItDwjltJOawiSozj+rMUSz0pkV9rrlxRcNAVRF/FJdxgSPE8f7jXO/DVWTxGliCTTgLDg==');

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
