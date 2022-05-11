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
define( 'DB_NAME', 'brief9' );

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
define( 'AUTH_KEY',         'OPGlIb5rCk;d29lW:cgl4y-&m.v<tHE)M/GhLBa80Ufv{.B1t.~=B#Jl uHJz/~F' );
define( 'SECURE_AUTH_KEY',  'J&&qF+mK179Ckd>n81wdYK:2)ot#A-lL=O_*<[C7~[!V}@*uFbLxF?,Dgd~POmxI' );
define( 'LOGGED_IN_KEY',    'IwnSrX@%A5*e5E/d CLOc{aLKvO~kmv0~> +pGB6MWxKUSm].[URe.S*bX5qa$Bn' );
define( 'NONCE_KEY',        '7(=;rMpLJ5<$iV<Bsjl{XML@ORK7fB+!Zj/GcaP:U<n~!9ht0AnrEpxlEH*88Q/b' );
define( 'AUTH_SALT',        'tZwl{YN[a)0BQ#WjB:EHY*K%n!-W}{{^^pP1_Pp#mi`6P=mpMk48bO81q~fD</0s' );
define( 'SECURE_AUTH_SALT', '(Xljkwj3gq%c.>fq_R^ex@2+&^a+=]T`&,2/9=Rn@g![)r?d&9-300j>bXzQSrz,' );
define( 'LOGGED_IN_SALT',   'lm47TFEr7#%:pmh<n#H~`X/;4-Ndc52< <L.*MU{1`Vs~&OI;@](mW}-<u=sYE()' );
define( 'NONCE_SALT',       'OC(Hoo-Eq<Fxrg>.w+}_<]RM8e-ID{4hgg)OK;u;_]$J~<Q~E_raH77 (^|gu6u2' );

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
