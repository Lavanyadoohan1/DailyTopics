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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dailytopics' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '7dC<-V$b{9Xw+P2s:*7Myu@R&-=!VxR< p~}N>K2M$jgeCIK6GJ10?D3Q`<}#!k7' );
define( 'SECURE_AUTH_KEY',  '/#y.0c.FS=n.>?#Wa4xa0M,q@%YsE/<@Xl~<LlhkpD8xa)ME2[(I^t3ewJN MZM^' );
define( 'LOGGED_IN_KEY',    '+)G:f%Z!jf4F95|3`?!DFt]W`?qF3RtV_LxCe]Nr&OJ,iCLVB *4=B02=M8iIK;3' );
define( 'NONCE_KEY',        '=h$}UKPXTF3k5cx{z#}9L)dIi2hHqmVu$U 0m[~!4SfM}&zDZf__wx/=,rRpV6eQ' );
define( 'AUTH_SALT',        '-#H8D<ccU9fW0`q,T<A0M(#Y#WV`(3bRu:,t<[]LM68p3*wiYd%@v,mu=<h-1Z^/' );
define( 'SECURE_AUTH_SALT', '#$5Dv>_kgfj>f1tP!O$u*oNy)dmPU&r~ZM(etZmy;8SC=hSMXe>:g|!KCj:DXVN0' );
define( 'LOGGED_IN_SALT',   ',[xt5n:`B2T7$~c2i{pWG<c@^Zh<<!WnPQVxfN]2Y)!-kYW$D&QD_/pZ+~(@Lv3g' );
define( 'NONCE_SALT',       'QQL?&R}z|5DR?+y$plmfl7Eo>v)zfBN]Ab%OU^^Wy&aAhr1@AAfuQ@Tas|m)fykp' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
