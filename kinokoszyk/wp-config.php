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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kinokoszyk');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          'Et0nT%F<UXC^N!j%^C6qV8Ao }JhQ+?Ipx%1.<x{HYq:sREb[evk:s4WA^q1j65]');
define('SECURE_AUTH_KEY',   '2;Hi3C(OxS%W7/b#t[a=!nGn~O4su/c{#^r.^&*w.EW/:2$q+3%soZT~+}iSv;v3');
define('LOGGED_IN_KEY',     'jr@@_oP)|z5R8%as7K*nyke@<W)KLW0-:<bJ=kf%[o89nEVz[@?-4$v0`X4/VwzV');
define('NONCE_KEY',         'y(6zI~sV3zd.[GL0^#5yNcdKCgyVnvzBkQXxafTM/rTu1LIY$rJkfjC!5]G*!;l,');
define('AUTH_SALT',         '#5m+++WpZ)3s7He*m`:2c9A?!Cno].=RdeJ%ug1 KnL]uL#8-Jnkg<*DY l.[qkZ');
define('SECURE_AUTH_SALT',  ')s/aoI`i=ts/UeB:3akQ+e8!w5KO  m=-_8Ouw3@UfLHV/BtKt_IZ1eISvrAHvt8');
define('LOGGED_IN_SALT',    'VUZTW`{hmv6|.n^^yUnr#AHxW~XPG3yUnFT}fNT:XK(++mUa[aI>^Qc?igTkH*VM');
define('NONCE_SALT',        'BVtS%B!Toc(|N{Hy&YlO%%vJ_73,MVB+w@Hz#r?~va&||.qd*jX_)jIzq*Tp0ngc');
define('WP_CACHE_KEY_SALT', 'to(zvcS=JZ=HmeCos}%>h_$>!`:]g60P>q<C[=tJ:<:pz7V^~mJ.xwXTg5P.;cH.');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
