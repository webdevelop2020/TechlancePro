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
define( 'DB_NAME', 'techlancepro_db' );

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
define( 'AUTH_KEY',         '*qt{,~=3du`3rgM s3QQCfCN<o%T<m|YW%95xX7}+}<Vb*05lCE7#>a?9nRITx=_' );
define( 'SECURE_AUTH_KEY',  'P 3vQ<hn1cjm.~:{=smUR-Un+Bl=5CGdE$-THnLx3Lc~&P5%36c8CU[#UDBIAT}w' );
define( 'LOGGED_IN_KEY',    '8,eO7;0,Ry>A5I;L8|.L&uZ=X;VM<G*P=^1!t5TX]x!Nmg#R*qz+1!$xBswMu+}8' );
define( 'NONCE_KEY',        '18=/a<pX.i.@;Y|_I5bu^z/W.nK#oZ)HkZT<uX_Z=Bdb7?3c8B[Qau3OjYpP$_!V' );
define( 'AUTH_SALT',        ' s~`_Ol!7],ZYR;#=E$=_ew; spT=t2OS{q  Po, vDFSUr3#U&Fu4]IeFB-ThIc' );
define( 'SECURE_AUTH_SALT', '-Yx@_g9]$ph3OYOP3k5_B(7?IOSmv(f*cznA-{o1T+zv/obbLGnehKr_@3U}$cw6' );
define( 'LOGGED_IN_SALT',   'n>x9.HdWu.p?f@s^CHKv^@n?k|d|D?C9GyaU- 4O Ar empxs`MX6)gn#ZBLV;UJ' );
define( 'NONCE_SALT',       '-+RE`QD!vNjy~IvDl`]*P*%Tp[d3@bGZ7@]yN])KiVp/>ej&EjV_Wm^UVH9ckGB)' );

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
