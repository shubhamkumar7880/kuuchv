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
define('AUTH_KEY',         'k7bm86ceNTn9Xgo4EvxxcUW2BX2OTRgEdRAbPuUOUHCCqJecIpk54/O71YIhBZl3DlgvdvLCibAZh3sf7uYcsQ==');
define('SECURE_AUTH_KEY',  '2QZFhhY5lZ3tJN0UfMprc9M9NH8hc5XfQmMlIevxILU/76/r5cUMUWa2CZpguwqL3uWU5AzV29hXDymx6u03PQ==');
define('LOGGED_IN_KEY',    'RDeFpu5P13zkGmZaGxacmywwCJ5T7BjaWbJgHH+8+IVslGA49M7mpo+B+1cDqenN6mZJgTOBdYz5E/lXyMKK7Q==');
define('NONCE_KEY',        '4bisC8gNopeM0Cox0xJOD1zjvX+1QYfW6epuHStq5u3s6MorfPX+adGF5Ybr8rH3C0B1CWY5OvLvm10XaxK9Og==');
define('AUTH_SALT',        'YGApJi7IFsnyu4fmcwa3c3qW1ge/Ihfsab3OiqaZGpc7aHEeAOghjjnZReRzr4YUh6Pv8cSjz4tVvs5G+7j8oQ==');
define('SECURE_AUTH_SALT', '1H6u/Tj+RJ48ucOoCxRZyh1y7t4TDjz8nW3CYDcyjNMdgvz4s5G6DKPj0M1nra5PqbRB5Xaei6Y6R+zXDhtp8A==');
define('LOGGED_IN_SALT',   'srOkMTjSCuvLjORHkGoc+f6fVNMeueKTYIaEgkvQwcgeqny6onSRSbnjrCqitByV5iC/BxlZLUBBE0ybJrxXAw==');
define('NONCE_SALT',       'OaqrJvf/8xTbxWkrL2367806eK/awp+amSl2N7+UZdRKJ60bXBXV4UZMBGMHL7+imNzZSD5IKeJeRyiqqn6BPQ==');

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
