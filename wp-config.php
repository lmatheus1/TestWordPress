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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'c6jJ/8J:fT6Z<LoPZ/yd;:8ZtRy[D[!D~Cp2+vw0ae^_HoGzTem^78eahl6)#wSH' );
define( 'SECURE_AUTH_KEY',  'hq%z5ySx#,l$b:ZNfVsFy/MUst7{Sj)_V@YaZ:&XSAxGw}qsPyW>VEfEdk0g:3;;' );
define( 'LOGGED_IN_KEY',    'a`J=Ui;70X*mijGO<K_r}}s_2)%OgAT34M?$JLo7.P8b^^$bqK*&`5sgM6ELI_,T' );
define( 'NONCE_KEY',        'F_.E`Qq7&V5UDv_eO.y$P^pTy`C)4iz7JyfZI<`#cX=h8dxaf@9[Ys#]5S^m>Vrq' );
define( 'AUTH_SALT',        'gM^WS:}}JXus*-,BLC%BxiQ=JFN50l#+X/59>wd-S|DIXQ.o~FhA_D4/%YJ<K[U0' );
define( 'SECURE_AUTH_SALT', '*N!Q!B]c.~Ox*U}d):`Q!?urKH;dJqa632j^}nX_F;2AwtREx8m@GVdT]?@LMid8' );
define( 'LOGGED_IN_SALT',   'OwcgG{5$,@H4YH&d<49T+KhutbZf9&+du#p~j,{QDl]U/&&Rkpp)GFl}b7:{U+/q' );
define( 'NONCE_SALT',       '.qqoNNO[j?0O*XN&v,{)R(L?43J,^$CQdtm!3:!ZOnoScrd@w^ggDBxZF~8A_DzJ' );

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
