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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'pH[(tRrXhv<B3[ZKp6Y z{X?P=Z%&.i*:acof^_o61Vfuo^O?YC>C6EAa:a[:D%R' );
define( 'SECURE_AUTH_KEY',  'm*6 ..Td9-u`Zzjs-wd2XNX@i:<WNeP@l7K)!26+j.F?=@Ag.H;>ATty(/Wx$=!T' );
define( 'LOGGED_IN_KEY',    ' ,;smb48V=gyX<=cGyI9>zgc@^J-=sk&#zcjs@zg>kW|uI@og!c>4Z9Z=*B% {7z' );
define( 'NONCE_KEY',        'lJGwDUn;B~_$~VB)n>%,D)~x//IG , LMwvuw}U{-qkZ<X6B!PF69xNp>O~{&y$l' );
define( 'AUTH_SALT',        'x]puXEWJnm5]I91 Ik%u?`V{?n)Psi%^.tm3`u@qMmS$V5k^~k^%q=9jhu}RaU_2' );
define( 'SECURE_AUTH_SALT', 'M~Wpt&SM?W}_*U&y4yZ;tNI+pVEUvd*1-aPmg~VsL4-jdg]dba: ;V?M$Y/^UW<n' );
define( 'LOGGED_IN_SALT',   ':PwUT;A_q2a?d6X![9.9{A_?h`fX;ztt6WVq83dwO^9H`F _8i42i=]RwWa7f;5C' );
define( 'NONCE_SALT',       '*v?&wQhM7kF,T&d[]]d?SB[)|nF(uy.]n8<&jV?Rt^/F13`jCveq}O6*PFkY5kGq' );

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
