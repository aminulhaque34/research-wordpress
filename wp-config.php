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
define( 'DB_NAME', 'research_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'aminul' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Aminul@456' );

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
define( 'AUTH_KEY',         '~mNSzKq>l8Qj0PVC-Jbu0T{d;rNq9oEP;pQ_k1i^h_*xU.c.1v]ym,A7N=/+>fy;' );
define( 'SECURE_AUTH_KEY',  'KHGrcKWfX+(L}cB?~y8Wn~|Pb0k&]z~E+wl<[q;~(^ajesyH+NUFPBW2BRHG>qvS' );
define( 'LOGGED_IN_KEY',    'x*xd/Z p*9nAES0Ds COoG;hPEI73,.hQVpX|I6NW_Q:nths)^ISK*>3CihN|agT' );
define( 'NONCE_KEY',        'fBq~~@ZN=!!wgPetR?3pJWc,9on]Ep9&Hfeeq)f-oakFc`%dViNnRR/4)$:f|wwo' );
define( 'AUTH_SALT',        'Z_~7z<P}JgAH}`2xB=?!b81}L|q-^ KB<?D]1M!bL:})&tb4N)^r%[1C_H;&T?>i' );
define( 'SECURE_AUTH_SALT', '37BvTL^%8,kw5f3>MnNb7+)%l8Rh~aj0W)kKMuqG`VIO:78WXZn1&-|q453)Mp>Y' );
define( 'LOGGED_IN_SALT',   '+41g= ja7enMx7!P4a=WaY:<b*a$U6<|yzvQQXlw-L9:]8>x|8njr?1ZM&R^,kBI' );
define( 'NONCE_SALT',       'px,OpHy*f!07whu:1Reg&19_Qa3>3Hy|},B;XuW|50Fb-ex!EoJ1*^;AQZa=YEFU' );

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
