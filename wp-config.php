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
define( 'DB_NAME', 'theluc' );

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
define( 'AUTH_KEY',         ',`>2b;a9J-LQND6~iYQ%5;nt+bSZ!ZzHDI4Wj?IaT-I[U=?WJR{7u8F>U-!mcJu*' );
define( 'SECURE_AUTH_KEY',  'm&-pZcTP(r4)sb}R#ISUT>.kd)<|#4Uy<lE%:nks`g-/wkU|{+9?9/n[!sN]m-sH' );
define( 'LOGGED_IN_KEY',    'P4&sf`Rln!2=`X&q9xOdf<Mo;/Fqx(q63TR6:e{(LMw0NtF]o<H[QH[B/?]._Q!t' );
define( 'NONCE_KEY',        'CZ}0(}U.%9M9$dEM}V(S`=>4@dBY6C8V+_!@JC*E{KMK/=*.2rAS=;yeQ{mVSMIO' );
define( 'AUTH_SALT',        '|Em6I~4:E`h;,XY`_g4S8j#7-BJ;^kXG1yuhOs4I2O|x zZkm~Pd)dvHe4t/Nc<?' );
define( 'SECURE_AUTH_SALT', '`q{ULb+cMKW9;--FHWkM5~lInwhBBy$d2AiCVwkfW}~#@Zs98jaJ:H`ZlY#C2H}h' );
define( 'LOGGED_IN_SALT',   '$<,~5d2?.ZIQb6TJcRi,vZ22,z`A$)moMa:Lv]oh05u.no%/v8?:{h&-sy  X}0~' );
define( 'NONCE_SALT',       ';@kSi0IlR9d>zf+NR_mQ15lqn[*I!ik<J}aE5LQ-)R]Y##;8+j2q!#<+O<{Msv.-' );

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
