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
define('DB_NAME', 'digi_topdb');

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
define('AUTH_KEY',         'N-v:ZU7n&t@,k~_WLTp49X|}4?F6.8lXOy,9;g0R*RdZk2p!QipNWV rFN@nlO>;');
define('SECURE_AUTH_KEY',  'x!-1:U-9 4B.]C{pR(./jD5hm%8!ME<<VVNQ_@O:i9)|huk1V)6/P4H[=x>qseP7');
define('LOGGED_IN_KEY',    'z_BPnn}(--NH0u(m/S?jJ!y(4pq8 -<@4E]SnUe]3STi~Y`|>@<7T.OHtTwG_$-a');
define('NONCE_KEY',        'grLTx@;OuwNbLMe~0Ke4Th{*ih@rReNlQiv*zL 85>W<ej6RX$5u:t=>9+?xWz6u');
define('AUTH_SALT',        'y)IV<F[?r)g5PaN/Do@C&}?er%*,^{<K -H=]3n6czC2LPHQ?)9%-p|NP|}.bEZ)');
define('SECURE_AUTH_SALT', '].axBU8_yH!$w_WR9Yv}=DR~bgWlFd.xT2;i)8}| Z_LGQ#x^8[.GKW^>MYYsa<B');
define('LOGGED_IN_SALT',   '2A6`bWf?9#1TG/TI#HZ#wx[A</s?yLhHQG7uBEt.x_}588r>a$9{7h%e&r/T?[`.');
define('NONCE_SALT',       '=dE ja}K*Rj.u/X17At4]tpkoh|hj89$GY7Z$T5M&)S5<Qf?/Ebr%x!&DgozlD(j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wph_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
