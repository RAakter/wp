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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         't90zMaTYxGCQAlvSKZXP9nsipvRZLIOMneFrM4HTciGk6d9B2LKIUdTgkl698cS5' );
define( 'SECURE_AUTH_KEY',  'wI0TYkDR9mRLBA7lit3mI4e8guxdLlgxSosxrhMlBPyibmcTYw0cHAKiQXPmDB7d' );
define( 'LOGGED_IN_KEY',    'oj6NMCjtq6K71vj49wNFqutN9ExX2MIVSD3wJSH4YdhQLU1tibGQ2NudTZRP2FZB' );
define( 'NONCE_KEY',        'lp3UMRwJRNNeI6dEkNd6zyu3veSrEOav8ld4cic9mFA7CKrprn0T66hcFiKGuT3S' );
define( 'AUTH_SALT',        '0liFMRwV3dToyzW8h2RFZfy138j32PhsjCo2H2JBJkgvnLuKUlnAAyDpcsxAvva1' );
define( 'SECURE_AUTH_SALT', 'ipjcaYNrNQj7TtfsbJAi1y6oovl1n5Jn3eNEx5np9VHcIcboFDJu82zwsm9b65x3' );
define( 'LOGGED_IN_SALT',   'BC26yjh1PLHM5sJUlt6NLez4BzgRZlwVPgeSnO1PyjIJ9sgE9ckMcjWpVrPI6fPd' );
define( 'NONCE_SALT',       'Xuq8KXrZY1RFMSFBo3H2OEeq9VKRv1EVrh48Zr1tYpNqof69sre18jHZTnMQtSUE' );

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
