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
define('DB_NAME', 'boxfishmedia');

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
define('AUTH_KEY',         '$k3LrKuw<fWFqoL]qb:k!!d=w<%7a,+?i8<=Z6hO07T$Yy@MH]g?Qm/NGx]5h!xH');
define('SECURE_AUTH_KEY',  '@q5;m(Ls6C ,{bgk0]<^|~#GvD-c#6s]{rEN_QIMMJ^#aB: }o];c-652k{(V=#)');
define('LOGGED_IN_KEY',    'x~g4f|TpX2v<=oiz6*4K7B$7Oa-.E(~3Sc}@kQehs#+{+^c? @:GUc:}+NLRrY ?');
define('NONCE_KEY',        'hDqUm(FHO+2Ch[D.y5DCqTtJw`#4RF&fU~ac~313p#e 6P5lmF-|LDL;uvJf*6gU');
define('AUTH_SALT',        'zfa:Do~ Nh$wdM]|S4[ztRjS1ep+7ETV4 46(db}CF)w~Uj1d9}o%bPEUY6mr:0n');
define('SECURE_AUTH_SALT', 'sCbws^v]oycVHaaE?{@VK/wU)pcK0+L*cpbiu9!2bY#:(p]1M}+7K31o%Wg8f~Xa');
define('LOGGED_IN_SALT',   '/9]8D=A#0,^Uxv_D.2_M]{oCIHz0?(0PN#S7Y1G!7$|gJb]rCI)f..JsJ~jJJT$L');
define('NONCE_SALT',       'RPpfx=#cHm>tU^tSZQ3fb2d]56<^V<e/)+Q<)yM8e0a2}gUSq Pc%G|XzO%YN632');

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
