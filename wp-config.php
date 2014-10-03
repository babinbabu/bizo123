<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bizotik');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+IGb3^.9926nM1YC_/CcpP &wjHWJpIdC[>)Q<o6/|d`Nh|]KM V#AvDyHGV<lX8');
define('SECURE_AUTH_KEY',  '@=ld^f-E9iTuY^#@DR_qoDOj`7A~}7:ryka;tk(nA|q+u,~9TDyj+*`Msv!+H,+-');
define('LOGGED_IN_KEY',    '5+ qamWruJ-7fV:wpxD0>5PlDk~}0/yd{L}G:!8ode#o^I`6+0&KB$K& Rrt.u2}');
define('NONCE_KEY',        '&.~o;;7W){1M(-smu0jd(;i0|Ja>qeNwVyoew0|~d :/ou3G4Shj-f@+yRRh=MH+');
define('AUTH_SALT',        'x -l6JA7(bc1Bc-%Tw-CJ;I{9|(4j5Y1>7|eZiG{%-qwL&5291hnw:@e(#6(tL8+');
define('SECURE_AUTH_SALT', 'S6%_1]!f]+Z$`9ar^4V> qsHf?>4?gs#Q@Y9SKZD$F,,_e; `GAl aAUgXy:tY~U');
define('LOGGED_IN_SALT',   '+=c/OgKZKC?N2L~jX=O$B(O;:j(u}bH.{U>rT*o1~@0-VPe`Q9nn[>Evgh*=@UV]');
define('NONCE_SALT',       '|{Gkqa?VN5PC@6SVN*j+r[wiiv0a_V+..7M5/M>3yU_u>mR<+7|m!FR/+9QI?MEv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
