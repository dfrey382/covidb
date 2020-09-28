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

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


if ( !defined('WP_CLI') ) {

    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );

    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );

}




/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'RhTuVfXt0P8C9mpz2TVQG4hy7KiaSNrqsPkSoS8AVBFco0O9zMgKL0CTdITNouit' );

define( 'SECURE_AUTH_KEY',  'oj1R69lvylftHSwoktjVsQSctLG5FtT49gbHZc7QmulJJL2dBhomeYOgpPVRcJi4' );

define( 'LOGGED_IN_KEY',    'vxFk6BLOgkhAfyA7MMublhPJF2VszwGfsooOrjywKJeQFqQKqJ7NR541piUF6zhs' );

define( 'NONCE_KEY',        'OLodtWfnifFgrx5yWwZG7WjoS7QjbMuNfrO3g4bWa8go6GU1ThH6WmrTTnCd7KAD' );

define( 'AUTH_SALT',        '0NsbgWA0nPqynKMDxF3x1uoUfjyKffW6rXrLuKZtAROvVHRnhFXQW1u8BSWxNEhr' );

define( 'SECURE_AUTH_SALT', 'Vsi8CZISdBHa82KrswQzXhHpWqchFyKvqiVIfAvG3BECBq6qNXhfIIcjLrVW7Fn4' );

define( 'LOGGED_IN_SALT',   'MB0hbZneck0A0Xq9IAiImGMt0Xayrsy7E52ebeBguq4rxsVP9Ny6dwYzEiMHsRDx' );

define( 'NONCE_SALT',       'A7liXHl06KONFrDz6PE8skGQ2dAGjY2g4SHHk2jBWwp9CW21BWxYTBm84hoTsC8L' );


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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

