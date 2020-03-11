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
define( 'DB_NAME', 'bd_lp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'P^|P@1N#Acvqwx;0P 5lAFv_Gixc-NZ[&|gH(M/.Of&H1OUNsc:ORv{Hk>huE>8H' );
define( 'SECURE_AUTH_KEY',  't1b31)GVs{y4c~X`%K2KJ9e[eB9<3mz0~[_d`GSI7;T!EW:Wg::xGT3a]tro9W7=' );
define( 'LOGGED_IN_KEY',    'c|oVy%vUQiESi-B@{L`YdiI)[[u(/Tbfo]{U$L&D0[XxK=oclyw;IuMPPW|)?~x6' );
define( 'NONCE_KEY',        'T0>6}of?.fzSz$&BRJ(LG{,`{HdF:9Yx~^nGu.Te-Zy|b-[Ytw`zxn2oD%H-b![V' );
define( 'AUTH_SALT',        '6X8Jz$w>E9MN8L 4?!dN{&`6iy*hkFIgZ]-+6Qs(qLrc(A2[s5Sjv7-Tl?sFZH*T' );
define( 'SECURE_AUTH_SALT', ' 5W@zqI4H9DF12zwvB=3>^C0Cq[kT<WoqXn)bti?nC{^D )P$;u5WT9x`3yN.vD=' );
define( 'LOGGED_IN_SALT',   'MaJ2?=/Ym;L@OJ`J0GX_mf!BItYAc[b-2`xI^,F_P~z}%8=!~ 1*,`vqf_2mqw]<' );
define( 'NONCE_SALT',       '%2&$`9Zq%~1UA(E,,#7=Crn?|H>]txZenXYfcETO!HABl5.RvhEI$~+ -hj;P.H4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
