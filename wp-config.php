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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'magic' );

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
define( 'AUTH_KEY',         'MgmH *W38s-CdHVc&yDkJ%+w9)!_z0o]gH97MoO;-DTHCQE1w yOMcV#4*j334|C' );
define( 'SECURE_AUTH_KEY',  'sl$.@K7:g^q`{Eo{UhNm_yj6/n4]vh3o+!J7fTDN((=}}N0I+R@TJA^f7p!C#U79' );
define( 'LOGGED_IN_KEY',    'Pr6P {Sh$KSd[:nCS&M{*!ZFl}V`;,y0W^GTE#CXMD:8YhkkzT!AI!#/|z2ab&yb' );
define( 'NONCE_KEY',        'I=N9)h#qzDe>$}d)f}@81K1v!(HTR) =y+Z;etOa{FxKa0Gx$(n<?vC}s:Dn1~0{' );
define( 'AUTH_SALT',        '%z22W^=ckxOn?%6bA&TRL/XgYq:0?V{O QfKLg^sF3`(: 3|XEyb_)@@_[VzMz{!' );
define( 'SECURE_AUTH_SALT', 'qg+ag^]uAu(W8}ip#ux|`{H#**FNjwD},3![S( z/]o:}W|3 5n](@D_zqrB)U(%' );
define( 'LOGGED_IN_SALT',   ';q|m8O mv: L2a)P7$ypFSwTQ49Xg n7 oUdCWXaCHgWJ6wHVWN?G/Sfnlv(Yl}1' );
define( 'NONCE_SALT',       '=W,A1>CkPi eqOJ]WUZzP/34Dt2KNT,*rVCG/yj!pGL rpThW}aIqInv49cRUYNL' );

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
