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
// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );
} else {
	define('DB_NAME', 'acorn_db');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    
    // Overwrites the database to save keep edeting the DB
    define('WP_HOME', 'http://192.168.1.11/ACORN/website/htdocs');
    define('WP_SITEURL', 'http://192.168.1.11/ACORN/website/htdocs');
  
    /**
    * For developers: WordPress debugging mode.
    *
    * Change this to true to enable the display of notices during development.
    * It is strongly recommended that plugin and theme developers use WP_DEBUG
    * in their development environments.
    */
   define('WP_DEBUG', false);
}

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
define('AUTH_KEY',         'T8bVNcfQpbMg9d!_=0Z$XTL/*EPomSVh+.>Hq@L{o2sD{h|mdRnmj?MKVUIUKNs5');
define('SECURE_AUTH_KEY',  'VWLXi1TzUWbpo,=t$;5_Wj!k$-1l02*QB  u<Cx<?se0-1)g^MydvsCK-C ;6jqz');
define('LOGGED_IN_KEY',    'Wf3OX6I&, _ShH3L$k+Wa1|>AX>T4o X`*:IGRs;|H+)<M5rfcft7aKY<6q<QFFe');
define('NONCE_KEY',        '4/S,`546 .cRZ-:04Q3!NOm0?GVB,N4&v|p|]X=-yoH7xi!kO!U2Xd+o<aN<GQHo');
define('AUTH_SALT',        'o&,.a=J+*X)5?s^?>WcZ?`MvGSSD75)@(~Et1O27%3>B7CS`YgnjEm~s*F~*)l&|');
define('SECURE_AUTH_SALT', 'K{mi&}Y|U<@7O/5+h |]M|GcQxJ#upD~aXdE&J*qfDr~)6dX]qfpdNAM*?s%Y4<k');
define('LOGGED_IN_SALT',   ',xb7FphrUID2q;3e:D~4S:#+67d?_b]SJRDnlTm<^TU_+&J9A@l#-@t&_mK,S i*');
define('NONCE_SALT',       'X7siNhOs;$BH&F|va%pg+:Yec7R2u+ZWV)j$&&&xiI*.*o}<UBCeQ#ReN1/t|1%C');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
