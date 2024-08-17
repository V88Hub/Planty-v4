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
define( 'DB_NAME', 'Planty-V4' );

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
define( 'AUTH_KEY',         'UE(9j>#:T{=*%>[h)=52H{$8L%A8C>TX,;SFI&mLzCJ~.=~o_6ZE#G__&?Sf!p:Y' );
define( 'SECURE_AUTH_KEY',  'kN<oKHbabPX-t)3rN*LfT#tNsyz%DK`fjE<$oUD_$PzDAi6vrBPJ>^+Xy2KJUg0&' );
define( 'LOGGED_IN_KEY',    'h+|SmV`!Qua%zt+j<+?:lRddR=K(3:U3eCC$nVwER8^KrC@1A(,J)}WKGOI(kgY)' );
define( 'NONCE_KEY',        '~{Ta-zL(!L>!bBcL[|i,Qs@SF4|h=a_nrEnDU8mVfWfQk}&1?]U;t.(._lJIOeFs' );
define( 'AUTH_SALT',        ',>T()O~1(BZd.FN-GcyVD+(R=|n3feKW;=}>/(zXSI&s] mB;#-1vb9YYOVcHqh]' );
define( 'SECURE_AUTH_SALT', 'GP0^-kMi-J4KYVjnnsjy7nl+>9Om@iGuRv5yL2tHXM#aP&}X8G_sj~x2%yn(j?L$' );
define( 'LOGGED_IN_SALT',   '-9L-JB[NM[r~w7K%p-P<g]F1u4-HU l^)56%E[i%x2-be_JhNKV231cZenmD>d/j' );
define( 'NONCE_SALT',       'Djd/@1[ wLi`-vBdySJQWN]dexMuNA9Hy}J_!QAo)@{#^=hgS >y!Mr 96@5Wnc}' );

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
