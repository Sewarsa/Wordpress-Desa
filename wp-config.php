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
define( 'DB_NAME', 'desanyamok' );

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
define( 'AUTH_KEY',         'EW6CP5EuFcpzee9j0ver7dC7wnpmGgYIDiBgwZJzscKsM3MfzXEWtWrPxZV8nZRH' );
define( 'SECURE_AUTH_KEY',  'GfE8nixTVdOX8gZ8FBsqeZEszAhxJb8XVvIlrlNKVNL9NT1fA3a0xzERE1RQaN4l' );
define( 'LOGGED_IN_KEY',    'wzbcxEl3RiSMoYqbufnctv9FBYue4TgPJNBkZ4HdngDoi0YxZ2Nv81JLiq7OQgVc' );
define( 'NONCE_KEY',        'Rf2UBLC16SmfibyamsxyrWImZi9fEPNIAWMBaV3k2jcl0A3poYiSEsU1zrT1rzIk' );
define( 'AUTH_SALT',        'b8xyge3MeOr9pbswLf0xgvIcdt1GMyFS2ALmWQblGZdJzgeaR4aLgynTB25pl07O' );
define( 'SECURE_AUTH_SALT', '3DMDtoMR2TMchUNsgXSDgSyYCl8v9deAG2Jp7NNfrbM7qqlNhLNVzpB0FNBwT0r7' );
define( 'LOGGED_IN_SALT',   'sIN4d3B1YrilcMGnDliri2erPk0c5M4elxucamm1WqydQdXmuTKjtKLNYqBwBmET' );
define( 'NONCE_SALT',       'qUBFJGMIP0uBcnxTGE8wO1UtRDrKIMdd2jILWUdOuKb3m1tXDsIMTfDrsq9WZRqn' );

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
