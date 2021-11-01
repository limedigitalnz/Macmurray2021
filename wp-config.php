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
define( 'DB_NAME', 'macmurray-wp-Rhv6GfKx' );

/** MySQL database username */
define( 'DB_USER', '22hiq97dZu91' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jM64NAteWUyr7jIq' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '9d)gA1p*!I4^59#Y9wH[AAVAZp*2eHRWQ@e5? Y^Hb*LPCOAfe+/CmeTw?N!?X&(' );
define( 'SECURE_AUTH_KEY',   'DXBj_BS?2t^1LsHz/E7RJePcb{iz]6IKmLgK8XO~~V^kwyoc5VDHz>7Y:K+]EROU' );
define( 'LOGGED_IN_KEY',     'jwR%5v|uJs.y*m.fot$XakW8,$Ak)s/,3MEE`18#MFebfk9qo-j`dP*Qut]Z_CVZ' );
define( 'NONCE_KEY',         ' JerO,#0UJx p!R~Zkov7VJ1>fQlFlE)r%VFlD~dbdL #<TO_g@a2YOk,+AOTX04' );
define( 'AUTH_SALT',         '-PMvmcP>6Q|me~JuW|srFSuC:&yb4/sOtSMNKE^hkQ-]Lmg}pT~Ip|>yP]/Z#A$Z' );
define( 'SECURE_AUTH_SALT',  'QXUADOX8t7|H(j=KI3l+M}ggQzbMDhRJFT*pg.eY1Dzh`nNr2hv`LA}.9=bRtmsH' );
define( 'LOGGED_IN_SALT',    's>K0Ok=ng;A`zr^tCn}uFcn@i}R(=e0w{B_?z>4SHT#1vk!H{s#uef}Kj1!l7<o0' );
define( 'NONCE_SALT',        'vbg&+`KZ0>%*=1|yr-0xf5~>Q7*#DLl|md+${nCZbA}6fZ(-6i]idP:o[/SozJ]F' );
define( 'WP_CACHE_KEY_SALT', '24r1S6a$E3rSAE D:5{KZqRRTxUS1H^9iN_#q(msgPPKL|w37<3iK[}?p;?1$+@2' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_a608573931_';


/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
