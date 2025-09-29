<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Bn)s5od+4Q0tELf4b#8e?hTqH?58tj}F XqF3nlwvxA9QH59swLFNv=<D7B_-nk{' );
define( 'SECURE_AUTH_KEY',  'IlZ;Ts5P&6H|rCBLQ+&&XJ0o.t_#{G70?:YJLfW8y@?XHp7-r?i~OV@5t2W1/@s3' );
define( 'LOGGED_IN_KEY',    'R&<8/c>0hFFt6m:b[^+akZb)^BX sINLpV>|+CO;`IlT:-]fPO|s{m0 GH~N2@Tc' );
define( 'NONCE_KEY',        'surp^gVcxrT]UPyV:TF=D~#%y>BB. :b=sFuOxa h_3|d_=6)$j%)r!?8-gQc[+%' );
define( 'AUTH_SALT',        'F=PY)8.n(PuVEDQ~eO,wf0>%lr6^[g`P2R#ls^#`@pKv;L6a~LP8Hio-7ts>bUZK' );
define( 'SECURE_AUTH_SALT', 'bd?-BR$FdO/M}]U Zv8V7Ps/l(> n7mso:AfHbl@IDp$[Q&J!EgNZbxEM70]00Nr' );
define( 'LOGGED_IN_SALT',   '#ty=YH oHvM=:6<6OD ;y,8hG-P>PN=~I[OxN3<tIG/cPV;%Er. 1k>_N0780j+r' );
define( 'NONCE_SALT',       'VJW^]o?/gp(qze>Tk{ZMx[CQs)HO-[mpI/Dm3Gnz$l&R_F!r0jET~~(V2Ss-TSC4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
