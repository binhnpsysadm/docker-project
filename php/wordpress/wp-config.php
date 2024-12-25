<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'cscabuxn_wp_1i1l8' );

/** MySQL database username */
define( 'DB_USER', 'cscabuxn_wp_atobt' );

/** MySQL database password */
define( 'DB_PASSWORD', '3P!FhT66FYyOgq~Z' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '-y~|7z&i5(TO3xdb%16wrFW7o|wGq+niWuKBrWS~49W:~)66YX25!/K-*!r/(8B*');
define('SECURE_AUTH_KEY', 'BL29gKK;4)TH2F1wF3[2z7G4p%KdhDTT&2oYIA@#U#vAx!fV~B4y/C3X&y|wYMyk');
define('LOGGED_IN_KEY', '6QLH28#6E!bXx~4l67b4wv9-(uIMQn2-M|D401(4u(vqK5@qQN1189Y0H-z~gWJo');
define('NONCE_KEY', ')A8Yl9-u37a*V[z5-Fv*h%9t4*))(nomjM/F5tD7j:d@sryQr|*f-5t)t/MrL1+H');
define('AUTH_SALT', 'KTNMy67W24S23x:tv6b65il26lQw5vZPK+vZH947~Fv|jmapU!9e-/A5Is)92hjj');
define('SECURE_AUTH_SALT', '~4Km#v90u@4;2G6UCss#~d:44J_XANGuJ|~5i1B9y)]@f6ShRO;xl08H;*@6V:46');
define('LOGGED_IN_SALT', 'gE~m/nu2KnM[nlrMkKw1kH:F~ioo:ri)R@Hmhh_|#y-8MZ%FIWoICsm/ED2bK57I');
define('NONCE_SALT', 'i208Cih)nf2h6015KZi7@P1(0bX]12%0&cc)5Jx4#m9!029e4rT;]+4]R2X*@Go0');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'TPa8QXnQ_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
