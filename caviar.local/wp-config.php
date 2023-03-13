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
define( 'DB_NAME', 'kaviar_mik' );

/** MySQL database username */
define( 'DB_USER', 'ntimba' );

/** MySQL database password */
define( 'DB_PASSWORD', 'diat3ll.net' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lruit:&e+~IoCXRkGX^u,YYHqFY)_K~16:qfb.{1+wj6dsF0ykf&<Tq`h3rPK>GK' );
define( 'SECURE_AUTH_KEY',  '>60-Jr5*j[bl6Ko>yT4TOe`/QD)eozw0Ix_@}|9QISx;<xCF,jOs5HGF(GCBJ/b{' );
define( 'LOGGED_IN_KEY',    'KY%(%w#/VIjVa8&,qIT;kZ*SDY#*oOY?0=4M{NK.JWBuE5G6Cofk]/r~be4~@Xhd' );
define( 'NONCE_KEY',        '%QYd[rd`+sxR_)_L62+RlF3]Dv5xO2Aiha>Z5sRv&X[C/!nnVx2>gb,2!x#qhZ4Y' );
define( 'AUTH_SALT',        'V7wy/i/K7Rq|aP4+{B4?aO>}K)t{hQ^crt,2MfR_?[;XJ08?WxAR_-T>V$*K@E7g' );
define( 'SECURE_AUTH_SALT', 'D{/MOY.eZxj9=La}Bw3Z;g-?ImHNSgPb,eYU{~0|%q/v$te@nsb.mn)$qL{tMB~x' );
define( 'LOGGED_IN_SALT',   'iu~Pm,S>Z6a%|sO#!DJprOYftQEA]F::sskQkO#y/ )|B;MPYeG$D=3pt8-5[_dw' );
define( 'NONCE_SALT',       'w%{8P2EK{CZ7}Vw-?an-%{H.,yiy6,UjC#G?2i4`mMl/pN~P~XgtP(m1=3[wfTNc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Das3s_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
