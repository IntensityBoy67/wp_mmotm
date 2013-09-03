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
define('DB_NAME', 'anytv_DSusers');

/** MySQL database username */
define('DB_USER', 'anytv_DSusers');

/** MySQL database password */
define('DB_PASSWORD', '2rS9t4e0P0');

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
define('AUTH_KEY',         'spdjgq5cyguuxmvmujrg2a58t3t5lkpfjtvw3ye0pc4uaotcgytrk9tczba3ohqu');
define('SECURE_AUTH_KEY',  'kggmc85qwpivrthf5eva76ktohjida17tdytefu9jctv0m7rmciaxaohrl85fvfp');
define('LOGGED_IN_KEY',    'zbrtez05zswwtohaguijvcqs4igdvx6ysx4ygyu3skjpvbmkcb35c8sok1ayflgs');
define('NONCE_KEY',        'apuq2vgwggz23z6lunar7ypxhxvazr7bloydpv7h45orvkalzpzhwt52jxv3k0mv');
define('AUTH_SALT',        'vapv9epctyke56nrvzajxojvrbn1fgjfqqipluimw8wsirqzpjiex9s5mgiahj8f');
define('SECURE_AUTH_SALT', 'ij3cin84wsn2z60zyszbzgi8qd5j065l5qelm1ifagso1tnqw0rn5g6kosnvcytz');
define('LOGGED_IN_SALT',   '5ue9j1u1z8gaqclo75o6wiojmpd9fezsvj7hmpx0vu52bchkxrsufdk2xbsu4wag');
define('NONCE_SALT',       'oklqphfc4sthju9fosfreurqmhneboykhf32bxbsojehurbnkspwhsmfq7nyoigt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.wordpress.mmo.tm');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
