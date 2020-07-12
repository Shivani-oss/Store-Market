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
define( 'DB_NAME', 'shop_land' );

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
define( 'AUTH_KEY',         '`4OW,2lq/R{d,>R^2x!|`WF /&{-6#OT:dD:ZLu!,SDH0j8CC%q^8C<_2Cbh&>IC' );
define( 'SECURE_AUTH_KEY',  'oDzSD.w13SP%suiA+S;jBa$|CMD7;]C:+-YLMW2N2b9lWKlRlryS>[?:?uUizzt5' );
define( 'LOGGED_IN_KEY',    '2O+PnrsZ.K=p3i*IJpB.Qjm[HuCzk~,8[tL@y`337%WF$<&2ox<xBEN7OU6f#hb:' );
define( 'NONCE_KEY',        '&}6VDEY!FP/IH#QY294C>YyA+UNR1NHO|[YrUGoa@xH1|CnV{%uh3*J+bn^9;Yj>' );
define( 'AUTH_SALT',        '#)j(f2F&Uh-/JS^Yg3rK cRQ}fQMp3W#I8+oKNq({J/c>lhPn:CUB?l7!Q=Yc)d.' );
define( 'SECURE_AUTH_SALT', 'P$|:f?2Rf}xZmd#Cveh,t2$}%Uz=jw$W,(<oYpFI8 [TKd3$pP^iO;2oQmLV<588' );
define( 'LOGGED_IN_SALT',   '1Twtl[}YW83WvsSNJnF:;i<TxFfJ[MO2yukgGKk7-u2#]}Jg43ap40$;gaM6G-NK' );
define( 'NONCE_SALT',       '9lkq)(T#TKS/v5D8222jH[^2/=YlK-TIGyG6WUGB>L3Z9Y]/pbvzVB;(GP{!fNY&' );

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
