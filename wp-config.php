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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'niku2889lee');

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
define('AUTH_KEY',         'm7d$P[=wWf*rwNGbm_b^uD3<2jk)Hsk?U^&69d`zjUj2#xg^%cCahjR>P8wVfD@w');
define('SECURE_AUTH_KEY',  'NO= U9}Ln??ssqWyX,X66ld|xYMmsUY3dCxl/CQI78>{~gbJY(YmutZpU$.@dE5}');
define('LOGGED_IN_KEY',    't6[Dtmy:pOm?pe=D&KvO-mSA?4Y-xxxD;a<>qRKP=&TTwsw{n70|xYm96C2?~Yk$');
define('NONCE_KEY',        'D[G&xDNkyH;26OqYux}}pld9)i~c5DvqnIxlvMu{s sR!=i^G-E%5cS1JO7|8M6h');
define('AUTH_SALT',        'icmSh!ZpG*cqFtej}H5nyCV5CI%MaoUZmvc^rL^vp9707%T:Q?u~Jb*tuAm1Q$lU');
define('SECURE_AUTH_SALT', '.U/h&Cqy`c1!^}Q~676m?$b@6-)DUUrjw93(=~x>.q8+ty@^Xx-Y7DUM(j=){mH1');
define('LOGGED_IN_SALT',   'Hf<D!8XW%h?^#vlV(#u5/2oucAYfa+uf@;;f]3cX8uz95(*o).SfGGox[n]%Q>Lb');
define('NONCE_SALT',       '$~|/OvciMy@IPM:B:k+mH,^&]%ZR?; bdEr_/vXBMjO<NBT[XvDCL~cTb@VrZ<l}');

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
