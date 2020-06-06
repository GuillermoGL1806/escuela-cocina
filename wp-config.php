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
define( 'DB_NAME', 'escuelaCocinaDB' );

/** MySQL database username */
define( 'DB_USER', 'devitm' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cAyI7JtMQGpO6rOU' );

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
define( 'AUTH_KEY',         'Y |n:Oj&%ROxO0ERztbD|a,0j:9&-Mav`<_@eFP~7[oEcm8},{&&2M{@|gR{UM&k' );
define( 'SECURE_AUTH_KEY',  'bD0[:@0Ivt!,4]Yco?(TKgFr/Vav*[ein2ZR0Q/^(/dNGUphb9k&ANU$A5RF:O{e' );
define( 'LOGGED_IN_KEY',    'x_G|%27kN}|W85Mpuh9k60heevLmGrT7:A<]C!8YQf?jOJ/by|Hn.NUir`y}g30)' );
define( 'NONCE_KEY',        't/;KIk{oDJe lJ{N2ZmQ^-E9Nc/=g$|y1%#Rg86r8Q5Ut:1vJ(CUlaj?IKUPEVQy' );
define( 'AUTH_SALT',        'FO~Rw:PraqEL?S%l.]n+FPZ0a1b~=j:`>;1%0OBIJ qjir;R5lSLT+h{xllORNL:' );
define( 'SECURE_AUTH_SALT', 'b5M=.<0X2V5HktQeKfdQ]a-k0uj{ck[8`y0^~+9a;t|I|-E|}[kIZQkQes/L{~o^' );
define( 'LOGGED_IN_SALT',   'Z[bXOhLg!FBw:@Cjm($X%eCAe+#C1QOyS8&7Rtd&sx+~gFZe698P>Pi(C;1QapTN' );
define( 'NONCE_SALT',       '96.+A HuX2&6<|xLj;Etz6{6Eklt)P+[Ba|P-]8RSRhnxKi bpqg$jDblfA;uFF7' );

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
define ('FS_METHOD','direct');
