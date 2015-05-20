<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
define('WP_REDIS_HOST', 'cluster-redis-sinje.vzvttp.0001.sae1.cache.amazonaws.com');

define('WP_HOME','http://d19qjoe3sjp6w0.cloudfront.net');
define('WP_SITEURL','http://d19qjoe3sjp6w0.cloudfront.net');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_wordpress');

/** MySQL database username */
define('DB_USER', 'db_admin');

/** MySQL database password */
define('DB_PASSWORD', 'rootroot');

/** MySQL hostname */
define('DB_HOST', 'dbwordpress-sinje.c5norroipcoe.sa-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '7#xl&M6?ig-Cukjpd,oCXB-YwdLEV10coEeH&/t e,fC-T|R(+4dim0};n:8D<Up');
define('SECURE_AUTH_KEY',  'UQJfq/o+1glg})SHqndvqvB%qXR!+Pn$`LNbmXm2Qa |NK}9)CQrhG}{wAY?Z[r*');
define('LOGGED_IN_KEY',    'Nf%Anr`$1!6gNRSADU~bkyi}&kxmR!3BMqL*x|6v,v|i-+>O`q}@-:g~QAP_]Ri|');
define('NONCE_KEY',        '2*k1vfmJeD;5l{@|:[@^%H>|~t r?LPI7S?_XKP.Sy8u~B0f&xln@%t}7X!Jk+Tf');
define('AUTH_SALT',        '76u+]e,=eM<HN@%<<}tJOtcJPL(>SDwm~rh-)Wj6p1|&nPfC|8)EQ[nd<#))+M6r');
define('SECURE_AUTH_SALT', '#RRCzZPWDY TS:t/!{Bw9dH8lcU#iT.@sMb-!XH_Wt)k-_D%#vM?Pt3[0p%%}t]|');
define('LOGGED_IN_SALT',   '5[[-6D(IFqJ+N1MfzC$;d}{5=c+-Bb=ki>!NQFQq?k@H@/~?ftbmkkmcc-@8_l/`');
define('NONCE_SALT',       'uG(HA{ LMC]kR*wx>:-X~&FqltL@|SkK9iNSq;`=6@g@-n{XuWL~YuVaTwD!D42Y');

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
