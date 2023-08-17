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
define( 'DB_NAME', 'epiz_33117254_w614' );

/** Database username */
define( 'DB_USER', '33117254_e' );

/** Database password */
define( 'DB_PASSWORD', '1178S5p)d]' );

/** Database hostname */
define( 'DB_HOST', 'sql203.byetcluster.com' );

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
define( 'AUTH_KEY',         '6icnq0soy5gazdna3johhnxokpajh0sasfdre3drwqjbkle0seutp6twit7dqfig' );
define( 'SECURE_AUTH_KEY',  'snj0ydknrhoaopxn2znstcqblpoo09hrqforqwprbbbyowckg8snxsxwhhlhluop' );
define( 'LOGGED_IN_KEY',    'bnc7rgd3munayq3hx0bak5s2snl6ojefoloxyboik67xblz2brbpmmjbk43x2o9q' );
define( 'NONCE_KEY',        'gvmrbdxnqnwije9ncdquhzbxevsaesqnemrpzaa5oc5nelddhburcpfw4wnfuuut' );
define( 'AUTH_SALT',        'ydndqxnjkbskvobwre2golvbbqhpqoo7kxelj6vnbxdr24rvfjksazzyk0z6akc4' );
define( 'SECURE_AUTH_SALT', 'pm2eatpnowemumjkcjllp1agfm1p6uvomzgehknmvhdyq5dp2btebs1mzhddyezm' );
define( 'LOGGED_IN_SALT',   '9rzafoowj7iwqtca8xxj5ab1r4fmj6ifriz2mlqjntegud5v6obh95uab9h07mhx' );
define( 'NONCE_SALT',       'veh4hkdvsmsgvdpik4fhhbyrvy0warjotazdzoqimxncrsgpshwkwanel3zin7ye' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvi_';

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
