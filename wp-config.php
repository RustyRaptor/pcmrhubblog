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
define('DB_NAME', 'wordpressmemes');

/** MySQL database username */
define('DB_USER', 'wordpressmemer');

/** MySQL database password */
define('DB_PASSWORD', 'meme');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F>%$=gl&|7A2 rhb7)I8Um}*o[-O1YrNxR k#L|)c>xN;21VOgQA0!VePvsGr= g');
define('SECURE_AUTH_KEY',  '}dBC[w{FaE0>^DtZn3Qo|&J),-mnfb6V63U5~?<,)N1Z]0&*:P#h+UGH95t=)6ET');
define('LOGGED_IN_KEY',    'J.JKLC|z.NW:l4_mpYh!:$Go4qk T$xcD]-M4HTR{@V:iHJdlFgc0irC<og9[g}Y');
define('NONCE_KEY',        '/p0&uSa. )kg`Y_>4lRT>i=?B/a<K$B0_5]dv>Cd9)NHq%Q1`FxE]?c%H&|mo6e/');
define('AUTH_SALT',        '6 Hi68GaG`]oDio #k4LRTGR5KMNu~kS=>V|{<0UHBa7Pe+gA^ 1Fle6W#/RI_ve');
define('SECURE_AUTH_SALT', 'kNoV%%!h=)9:$=$+p5RI-=>XDzqzCy}s*ECB,(1yS/,+u*aH?#MsZ2U35#ht>yX>');
define('LOGGED_IN_SALT',   '/ R,_m3^>_f,lrE/6m~D]-pUg47RBz8gZaK{e(vpZN kXaGKLy(KxIpvlF|_+~RB');
define('NONCE_SALT',       'Cnb|eSsFK:oh0yphXz>ff.]oQ8uCFA$<HXyzqGi|Di,bgW-BdSFsL+&:Ns{au{tt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('FS_METHOD','direct');
