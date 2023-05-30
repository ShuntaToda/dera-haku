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
define('DB_NAME', 'dera-haku');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'H?l^LNHKC~OD8@.bEXva.cl_gg}K)km+55HUj6BmiM~o$@Y+IRW*FT>WVhDT^khH');
define('SECURE_AUTH_KEY',  '3??YX7|9D1MMOhmx`AsxEN,*%fg#]@YkIS#ZyN9Ul/,2/;1?J*i`UXHS{wxa]tR ');
define('LOGGED_IN_KEY',    'U#$!<B)#v09&%Ea~3+&/U[h]SLm.MRvqBEr%0kg=8v1.(V-Zm,SNy!qpj7iPCJ~i');
define('NONCE_KEY',        '(5RDM$$*F),2yPM(3+CQ^X,n2rv<6rfl)qNCZqF$[7+o|2lzTEh5g-A~s/q$& 2w');
define('AUTH_SALT',        'eV-mLu}/q[[[i7YtJLJd[B#YJ2H0%vdcSL{ZH1mzNA~HWQz%ICTS! ae!]pEP:]c');
define('SECURE_AUTH_SALT', '^@eXrC2U5U8#MOzo=H5[&G`?w]??|hw0,%i<w]nHb:dU1oMU_J2|/0${,bPPme`6');
define('LOGGED_IN_SALT',   ')CqGOPdZmO9IyS2N>^B@[568z0@/O;fL}(>je:@0#2; qSg>;^c$wTeSs-L v(qg');
define('NONCE_SALT',       'V.s buw/`9Jb8e*7_`g&CDiT~x]Pvl:vqkp4IbUgkm}rYVz(6bB)=$ %-KJXrM[m');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
