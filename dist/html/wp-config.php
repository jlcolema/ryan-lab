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
define('DB_NAME', 'ryan_lab');

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
define('AUTH_KEY',         'Rp/2v~&,hsj}(~5j-KI/7.yE&A=a%_%N ~(!$6_h&4!I6h~kORpyf=xt9O_I-duk');
define('SECURE_AUTH_KEY',  '`(NLdYEEUG#1#RT}8!HivmzH)0j>q^?L3DT~N=$(6GkwQE;o5AhW.!t]~aiylIs8');
define('LOGGED_IN_KEY',    ')=6K&{jKfWuRw_dKCz!%Cq>H+rsjP{DpQA{+_or4]hhwy(xh5Z-r*M>DO!+NR3Vr');
define('NONCE_KEY',        'Hno%m]/urnz4kUT}$-5,%!3NCD>B06{58QY;GMOZ8hKubI{P;SPDGK3?2])uo-?.');
define('AUTH_SALT',        '$}WGU-%LDoq,pDoq@$i 1s)OxWWN;h6BQ.Xz54m5F]Sk2~AOMNc3^SE>Y L4hL!y');
define('SECURE_AUTH_SALT', 'u!YP{xOsNTrHh0$5u-^h]RwSa2 =$2szr1{%w!cEVEg*69F.>0,de/m.Ihe>gy#_');
define('LOGGED_IN_SALT',   'Wj0J|aeY!7D;aD{>bw]m_,_L ~*A7,P1_YD9i-z]{z1Jn#Tigs&WBN#)be`|.z;A');
define('NONCE_SALT',       'CNl~4Ii? 4CCatf7u};+b1|)HK/+=tkElf&K3-iWw5vUIZ_XeX,Q~C ;flG mZ%T');

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
