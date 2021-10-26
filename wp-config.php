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
define( 'DB_NAME', 'wordpress_rideauxelis' );

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
define( 'AUTH_KEY',         'hfl:HVO&b#OYe_b,?j9PBFUmJ1T2dBzNt),r>9n~,*^>A4IBHdFcaU%u%6O-4?C5' );
define( 'SECURE_AUTH_KEY',  '$?5X`:<<NLUO8#sy-+0dG:j9DD@FZIf1AqLdNOVoj<[eM770y4JOF2dr6= Tj|LR' );
define( 'LOGGED_IN_KEY',    '4k{vW7/2OBGgxp1a3:dG? au^(T4si:to{sm=Y>7b!u@?PiZnkILJ!s?a5!)o4S)' );
define( 'NONCE_KEY',        'gge4sOEin5H:~C%Y1DH|IbbI/Uz,pFH5VJ Sfj|8bOuWH?w]q6<+J/4rg`+EIj]8' );
define( 'AUTH_SALT',        'sqmDsrK0GF35e@xI),:A1;*GY]56(Fw&gEl:-I|]..0EaV{>.,B_f5/qnEy,Z{p|' );
define( 'SECURE_AUTH_SALT', 'mP8=>6V/t3L4A6zMd_vJe6CVxevEY6*)}GaOTpc7.YRbJ7q9NK[sQxBo#7,#R(/#' );
define( 'LOGGED_IN_SALT',   'BZsM2a5(h;`zD_MhTa279PP.|$%PjG., fghi5![M-|q_BmSS(WQ$]CNQfN:B,yL' );
define( 'NONCE_SALT',       'RG{MJOFh0&Qvro5ZXZrIIx-SqVaqNrh,Rp|^&bMZwbe0TLaEK+r@#xgDIn}b >6i' );

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
