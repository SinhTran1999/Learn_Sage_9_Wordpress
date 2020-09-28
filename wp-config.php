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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_sage' );

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
define( 'AUTH_KEY',         'pi&EB`:<?6~D9Y5W|tYOp%H1$%CPeP}-:<EaKXys.,<t+twr@^RE[H|b*ZbUFbLd' );
define( 'SECURE_AUTH_KEY',  'i_.9ZMBANtU46[}V4l%kJjT7>Qy*znGU0,KkZ>$Nv+gc43RL,mQP.3Qgs6@#tcc~' );
define( 'LOGGED_IN_KEY',    '$Lj^#W(GrLx}%(0W #jH1yJVO9R&N)qsbd]d?tGw2%CT[1TK GeZclVKq{v]_7(x' );
define( 'NONCE_KEY',        'ek7V^-}n2=L0k!CFFf:CRp]#VO*@{?Z_>Z,)]$N}M88WUncjB^mVYG?s8fA<Mc|*' );
define( 'AUTH_SALT',        '[:Iu1{eHndop:i!FP4qFj|Lx]^-;.yomH.pPpSL*[vk6n3@NbAZ)bkkT,=ND|[YH' );
define( 'SECURE_AUTH_SALT', 'IqNE=akX9^bsug^UCa%B4[s0 HpRJgVQ+[hkK:a [R@[F:@/.Arx&)Y%^[qO6x[J' );
define( 'LOGGED_IN_SALT',   '_!w7^?*zWix+Qp^jmZ5Y,`&%eKPn43H.e]vg`Xm{H-0E}crm:pT+p](iO63s~Eqr' );
define( 'NONCE_SALT',       'on=i7mJj|MZ^bTPFBZqcw<-X=?v*@f<f}(EdW}K7~HzjI@GnbW7Zc2@|$0LYq?Dd' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
