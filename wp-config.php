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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          'g5(W.7]DBR~(0a&C,ciil-@eZg]|5R>Y>nsajlme=sS0K$g?KL#oc5c+t7QavF-e' );
define( 'SECURE_AUTH_KEY',   'Dr|1lLSr+].-*Soxvn?%&-V.1bzz;Oj6%`X|Na_G{<yglR{<Xzg]NW J&k2?&jEo' );
define( 'LOGGED_IN_KEY',     'k:)sr*-n2|IECMDK=-bp<=t5%963$o~pnGVoZ({;)KrJrq:4JJ:oSGG]wC;vn?FE' );
define( 'NONCE_KEY',         'N9wVlWnC*SSFN=9t/7#0SC|nJ{Z<Y|:W)pi}A7 yQ&*Wki//.?79x5,#Q%T(,|R(' );
define( 'AUTH_SALT',         '@Os>H%7>s`7oAjPwo?-BU1;&rp)5{ IS_Xu9+?x,S#$rm{%wO :E>M6O*:dg)fE|' );
define( 'SECURE_AUTH_SALT',  'Qq{mC`X4r:t}~<WO3at]2)8sRa[vAknON$pNbG<-NETd8EYP_hpW;4A[<PfV<E<Y' );
define( 'LOGGED_IN_SALT',    '@8b:0:lYHRx+><EmUZ+k$>6VndI9$b$,G@-N7I0T5Iz0ja7A;<L-@+NL [V:.5kT' );
define( 'NONCE_SALT',        'w4/x# d]%0@hVF+Bhp+V}NnaQmc;ZcfUoWWA+j# rT&v4GkK,iJ*P{:s4DNICWz%' );
define( 'WP_CACHE_KEY_SALT', '>iJffUw606.FG#e,alR,moeo&EYVH/3z^]|f+a[[F[E2[i;VF6ZJJCv:a%%j&,d^' );


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
