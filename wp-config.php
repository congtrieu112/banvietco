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
define('DB_NAME', 'banvietco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+ue!<%dZ<6!1r{jTtX}q}76p!_xs]D)pw[@yu(?2):5(Lt(,>Ui`mhtsx}wobd;k');
define('SECURE_AUTH_KEY',  'E<Hj94yJrNtXIy}O#eaifvZ7C*7eJG,p=Ci%Aav%#v6lLobv7[O4RDoqd1OvUBY`');
define('LOGGED_IN_KEY',    '!lT5Waj.v28?Beg+dnk V.eR}cnd8hw_Hdg;/@*V*CUy+g9v-XJQQ2*5~?SEX8H?');
define('NONCE_KEY',        '5]?`*OHgR&(TZs<i%E%z$)cti<RH-le<k6(rf0%NN[yT/o>wK>IPf0zHu lt9hHh');
define('AUTH_SALT',        '9-kHxAZv@c_Ke.7quXe6J,tqEVW^;KgwRD3N68FkzI10;&b#|)Mq}8_JG.T|84=M');
define('SECURE_AUTH_SALT', 'jK(eI9PVNI<_ LzyfB]mSs|d1lOH+@+:XaoMEdQS/Ruhb!doncmkSNCtyaMBZ)!E');
define('LOGGED_IN_SALT',   'opMV4Gk]V,F7{So2Ew3mn*y>O8QfT&8(1 #}TW$/jA4p@/-xS5IC6.r0KuN95hiU');
define('NONCE_SALT',       'U.y[TS?zA/OsCVEihye][6J6>`q3B#%4(vyN3($J230|J*ZvTyGqEVZ0kKCuQD T');

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
