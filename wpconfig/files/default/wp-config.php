<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


define('WP_REDIS_HOST','wordpress.mplfls.0001.sae1.cache.amazonaws.com');

define('WP_HOME','http://wordpress-1024604632.sa-east-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-1024604632.sa-east-1.elb.amazonaws.com');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cfyzsi3p8t2x.sa-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'L>eEHKaNkUDs@g[`0G+g}b8#zT}Z43ZjqE&zD=wuZTHaUy+fbtw|li {+O2Q:z-E');
define('SECURE_AUTH_KEY',  '*a>:1`_a@D.Q4tDS?4T`W!fG0ZF^!|#&sN9DGMMdXz#_>iy&1+OFFS&q$I}e,}vW');
define('LOGGED_IN_KEY',    'k/e|&0V*d=hjY%fz{U+iye:AE+//|9|c%{{CT4NyF0lo(npQu;.Q2jv}(M%*&?`.');
define('NONCE_KEY',        '?A3;[ &OTVnh=k3bC,_<X&<RMQ,,oWdIbSm=n!Nr@XJ$j/,1WT2a]Wh>nlYw;*>]');
define('AUTH_SALT',        '+XT?7X<7-mGAO{ic]l-!R:_,D=zC+j@B=Cap9Sr:6hFYi2~~|7LO<(,E$L-P`PQ?');
define('SECURE_AUTH_SALT', 'f;6N>6]+,@xdyrT5R%AQ&/gfeC7`+ ~{N?]G@E|LX2F6^Kg(HV|c``n{kaxbO+if');
define('LOGGED_IN_SALT',   'KQbkJ<&r>o5OYBWhfST$-i:nJ@9}i%9890Z:ekr|x%]b[DE-DY[Te_I;]Oy>U0ww');
define('NONCE_SALT',       't/lci_{@36tIMbFh{j4gA!7(Zm5uMfwwF*:W7g+=}aY_6?+Y4_/w;9_Uwz?(r+zi');

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
