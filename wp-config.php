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
define('WP_HOME', 'http://flourish.test');
define('WP_SITEURL', 'http://flourish.test');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'flourish');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'Homestead');

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
define('AUTH_KEY',         'O5<n v.>,S4iSVFeH7IEY7:Fw(E2, ZN`K0b(;7=kq~]0%cL>3f|9vn>$B[`Vw[V');
define('SECURE_AUTH_KEY',  'jy).)ogo8g>fHOC7{aU}i[nq$s!`X#L<ir0PbAVt~k$7OC_8 `I;q.&T=EcF?~*;');
define('LOGGED_IN_KEY',    '+rUeTD h{#{OUs$cmWqB>hcxf[ 2?|2WOev[izX{?p@C*FRF7 `t_vm+h;]L&!M{');
define('NONCE_KEY',        ',KAml0!&]A6-jy8>8Y|H|5)&q|>ICrs8U%Sa.-S-Szt~:`_|^DZd)lanmC0 4`y*');
define('AUTH_SALT',        'I!Wm2_|g0,9qTBCiM0Nw~4pS[C<b-J|Vw93LjV[L,oXU0efmKLl]@nS6W&l,nvCA');
define('SECURE_AUTH_SALT', '$03.!y2gj:Lq2Q30V+YA,Ln)]=,%_}bm Y|fCm8G8ZU`.ud+Ay2)v%E<{U-du7)Y');
define('LOGGED_IN_SALT',   'sH9VK`2g.p:^J+H3q?N>t!c%PF0K?OTLT%T=V5=6#tG`8FIx%T&w^mxp8?R#A|{A');
define('NONCE_SALT',       'JdKNx}e_)q[Q1%RSLOKe)t?#uh[G8nd{[}qZTHrx}q,sK4l%GMXZto)GJM`}*&(B');

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
