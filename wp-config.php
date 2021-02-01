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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'WordPress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '#62&uwIIX=AJ-_RX|!_d/71v,%kG.z:>W/ya,:yn]BR=k1?EEGD8^F/E>5/}qEj2' );
define( 'SECURE_AUTH_KEY',  ';PT}MXVi+3,O~>`co9nPzC)[?Sr52pFF1ELY5_Fh:eXf6~QPTN<)zomJ900/P9PO' );
define( 'LOGGED_IN_KEY',    '^m O>.lNVfn:b<y[e_0AXe6hdWQ:WRRfBfql@S_.}[3S.2yt&o/v;~*A?dT{mk(`' );
define( 'NONCE_KEY',        'B+*lk9^[/~4?,TpLu9%8U%g3m-@{BM0iNCyf:rXC0Ta :OnloTG%.oqGO38vnA&5' );
define( 'AUTH_SALT',        'j[Xn4Gh*zlWK.rm|(|]GZ~(aR7)AkaHzOxD%kuio({eZFQ85$e<LN=/+%iek/k&3' );
define( 'SECURE_AUTH_SALT', 'e<<njHSbQ8c(ihWofBoiM(.<h,*^>3x#Orbz>hGUgH`..c r1q(4nqy vo&!&}w9' );
define( 'LOGGED_IN_SALT',   'M=:LSHf*E&6,;N`yll0<_J=jG72i:NWXr^4n89UBrO@xU2agPm {M! -NVxC8k0n' );
define( 'NONCE_SALT',       'fsB_~/SfF@Nn:ah?ec&i`vFAz%G{,QJvukIa>k5x6G(M^XW@{s,c$&xWo&`|M<wg' );

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
