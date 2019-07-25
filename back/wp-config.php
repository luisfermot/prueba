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
define( 'DB_NAME', 'sistema_evaluacion' );

/** MySQL database username */
define( 'DB_USER', 'luis' );

/** MySQL database password */
define( 'DB_PASSWORD', '1007497925' );

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
define( 'AUTH_KEY',         'ow2|rkYkPS&V)(+!_@?J4?STl+yT^(qIui_]MO9_hX~J=M;`l(xb~Q}xu/g(lXo}' );
define( 'SECURE_AUTH_KEY',  'j>7]M*VBb, [GL+kn9JNg!-kPH?<_]]/&YtGjH81 Q!.{J6dcESpyh.7o4~t|Yqk' );
define( 'LOGGED_IN_KEY',    'Is{/[5;btbSPyL~P4BqOf8+WwNr+1~KWC|SY3 A{t]zVEl$~[CcvR+a@G4KBq#iy' );
define( 'NONCE_KEY',        ';.`9>a9m4U.}E.w:>[+~>^ _P6c+M4r [?Pyd[Xqs+PT2Nke2[pzFq|V:XYC(Jaz' );
define( 'AUTH_SALT',        '|e(_q.Fv3ro.IJt` ^;*p<p(xCe>KhN&0~Ib3i3Nhz&M~r,`1NBF>D 6vLdpjCd`' );
define( 'SECURE_AUTH_SALT', '>hKsW[uQTm $;#Cvu-{-I-#!<6lX>@=i<esepK$^Q7&nax/A2]5FV7oXm*]T[b;}' );
define( 'LOGGED_IN_SALT',   'Z%UZ4 d4rviLO0B2z;AGA@_c|U^yl&q,4A3>h[yg=<9KH:52h#cmcrlHYu-r{?FU' );
define( 'NONCE_SALT',       'Jz+i{MBi32Zq155`;DW+1ar|x:gz`N26m[NeUIY L? roi_0ZEuUt0|/|AwYGXGu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsl_';

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
