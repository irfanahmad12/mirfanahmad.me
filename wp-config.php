<<<<<<< HEAD
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
define( 'DB_NAME', 'mirfanahmad.me_db' );

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
define( 'AUTH_KEY',         '@s_<@#S,$Y@_?.aQgmAm$Mqb`e(t>hJ4Eq9}jrh<^z}JV]jV*=Qox`*,A!=8=4Fu' );
define( 'SECURE_AUTH_KEY',  '+;J)pj[Qf$&HF.MpG(9[_Cr0Iq?riu!T(6H?Lku#)D/ynh59jJRnMx$wM:2Q;.c ' );
define( 'LOGGED_IN_KEY',    '^kWUw;8o_x`Z)|o,IeXmsOd&`5$7DomH_;G]bFQonb487#|^X5Rix6;}wl77|f>f' );
define( 'NONCE_KEY',        ' 2C{/#DDp5>|_L7!fiM Cvady:/aL;2<L}>0sk3(Za?ubdCw]& _w^~oPmE4m]8p' );
define( 'AUTH_SALT',        'qD-+`?j,)i3)M8ivF}|[7;P.awVLuUi^TNjh>/BHzP3oEQ 6VlWI]l|HZplS}?l2' );
define( 'SECURE_AUTH_SALT', '*SjvumJP(`mJ&r~4?b|9.eON}l0=5Q:^1`x1e=H571;jg,tv!m6MoUG9EY5+#*W@' );
define( 'LOGGED_IN_SALT',   ';<zR21gM nv=7]rX%&oue)lh]Zsedji>5-_b3kx?2#wgv]zl/n/#M&L}H<C*:Jjn' );
define( 'NONCE_SALT',       'acNS*HMjF):Q<33MgI3YxIAI!V@kFE)*Z*gfD;IX6QMCSYcr~R7)8Dc4kBiw}[|b' );

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
=======
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
define( 'DB_NAME', 'mirfanahmad.me_db' );

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
define( 'AUTH_KEY',         '@s_<@#S,$Y@_?.aQgmAm$Mqb`e(t>hJ4Eq9}jrh<^z}JV]jV*=Qox`*,A!=8=4Fu' );
define( 'SECURE_AUTH_KEY',  '+;J)pj[Qf$&HF.MpG(9[_Cr0Iq?riu!T(6H?Lku#)D/ynh59jJRnMx$wM:2Q;.c ' );
define( 'LOGGED_IN_KEY',    '^kWUw;8o_x`Z)|o,IeXmsOd&`5$7DomH_;G]bFQonb487#|^X5Rix6;}wl77|f>f' );
define( 'NONCE_KEY',        ' 2C{/#DDp5>|_L7!fiM Cvady:/aL;2<L}>0sk3(Za?ubdCw]& _w^~oPmE4m]8p' );
define( 'AUTH_SALT',        'qD-+`?j,)i3)M8ivF}|[7;P.awVLuUi^TNjh>/BHzP3oEQ 6VlWI]l|HZplS}?l2' );
define( 'SECURE_AUTH_SALT', '*SjvumJP(`mJ&r~4?b|9.eON}l0=5Q:^1`x1e=H571;jg,tv!m6MoUG9EY5+#*W@' );
define( 'LOGGED_IN_SALT',   ';<zR21gM nv=7]rX%&oue)lh]Zsedji>5-_b3kx?2#wgv]zl/n/#M&L}H<C*:Jjn' );
define( 'NONCE_SALT',       'acNS*HMjF):Q<33MgI3YxIAI!V@kFE)*Z*gfD;IX6QMCSYcr~R7)8Dc4kBiw}[|b' );

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
>>>>>>> 2c0b767b7cb917c324d0ad9508510ba92ff5ab31
