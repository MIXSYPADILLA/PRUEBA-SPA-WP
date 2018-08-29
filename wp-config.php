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
define('DB_NAME', 'renxcore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'WoUFDbZCP$Xg~q0,)SzZ[x|O~}&p p8*gPr<5<Z#vr+Y$U`dLVc,BGM#b;*4*cCo');
define('SECURE_AUTH_KEY',  'I6TZax~IOrhy.9rT,OhN}?&s*N_>ukSk7j/OYU7o_85(dM9vwubR!^I>#N?A6Dx>');
define('LOGGED_IN_KEY',    'UwI+|*E<Bq<_r- (6p3U1K!1#_;7jCE~<(oG~v9_?q,4nWn1gn}3F$_IfljD?fF*');
define('NONCE_KEY',        '/e:5xrgGUjf{Q|H.9eK$Tw@2NO4+kc?NHhrN_~I|O<L2;[^gU~e4k@Dm^2Kw,HYK');
define('AUTH_SALT',        '`73:|}Kj7aL<4D| sLND&!Rtc%-l/w;{oD`HU6y4}OG#med0k{N(ze&E2|<x|Zua');
define('SECURE_AUTH_SALT', ',^q46BYW+R1/<88]4S}9G2]S&zXe|AJFfClLz*He)Yes>;X-QtX1y}@^G!Mfyowy');
define('LOGGED_IN_SALT',   'MfLx7,o+?F>pqUMIASr~H/j_HiS2((:pPPu|E>e4`Wfu*C*0@1+aM4&D_XT9hbf3');
define('NONCE_SALT',       'bF9J.*.pol/qX1:oQB`rj9R~ST1N=UGd!?f9gK-uyg=(#.c|VJ]+SER[1EUuX{#7');

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
