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
define( 'DB_NAME', 'tas-learning' );

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
define( 'AUTH_KEY',         '`|foJ8 *=|&zg|KV@@<Xp8DWoqp#50g/j~y/LtAw-K]DNPngqI`h=MR~ei6E$=.,' );
define( 'SECURE_AUTH_KEY',  'h$@8aaM5=gw&dR^RQM* rc&Z<y:E| NeRNM2giTR]aJIL~5yKIR!^j*NuSZ0cspV' );
define( 'LOGGED_IN_KEY',    'j8pWC+.c`E^80=ZjW 1CexPFp;v6sze,+az9lXS&!54zt9KAp*{B,)bflI,t~XL^' );
define( 'NONCE_KEY',        'hl<_4=OhJs5?)M6b6CPGfGKpFWvg]><I0Z$dr)]49rKGTstwL]zOm2)m~+fDqTI0' );
define( 'AUTH_SALT',        '[SP&,!p9a.[(y XfwKKC^Zr}jPgQKcsOn=3vg]iKY..MTvUu9yPfwM4C],:DVy[P' );
define( 'SECURE_AUTH_SALT', '3 ?T>+fCr7P8o5!3= V|C0w`d%tp,AC/0_#|9ezIoJ_h)I[[+}1m,ym.`p2|WI)_' );
define( 'LOGGED_IN_SALT',   '[O#.Mka:n}8/KfO 8KEaWW0(9nPkH#Q_nOOEa@i7[Dn1mGyUwq%}>g@/s6j <9>w' );
define( 'NONCE_SALT',       '2rjEs8=dfYB$X.~$jE3^!n|&wa?:7lL_A5YL1M38[b. ?rE5G$mKN)h11Sy4NXo*' );

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
