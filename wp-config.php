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
define( 'DB_NAME', 'trydanafan' );

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
define( 'AUTH_KEY',         'ZY,L^wdK7lYy?_E@^E2{ej0z/8JZflLj+1XI[($4508r{=>z82R,(M?df<;W5Ct0' );
define( 'SECURE_AUTH_KEY',  'N:zZo6GVvnbP4%jW=}d9x3Ri?{GbryU9lUH_+sMr<]VKJBjy]s1a^C8DgjoQA4}>' );
define( 'LOGGED_IN_KEY',    'ROlnu]J<.KqvE4jRK{INxKu@ab65;.(K0.y6?5)(HG1 0((m*vyKpG^wt|z68+n|' );
define( 'NONCE_KEY',        'mQnS/^LdAD*B*J s%}OG9d;rCFOMkvEj:xfb lqwla7kf5)RiI.?(u/eE^(4~<@<' );
define( 'AUTH_SALT',        '>9N%{n7}H&I}T?30WxG-UTJ:lYDQPasJ::h7OBTUbku(%Wrx,|I*~]GwI0sC4fh-' );
define( 'SECURE_AUTH_SALT', 'r<O`K}.Fx,R#Tj~79#~wuxlgVNl(TY-!_)b);{M~M6yq3jH%_5LeC}+c5Z49[IX-' );
define( 'LOGGED_IN_SALT',   'U,2ANn~O?Rg/u98a<kfNs}03c!GuCReh`d,KCrDl)[9E<)u_e*$C=!o(z[FSz)=:' );
define( 'NONCE_SALT',       'GVK<n;Kf9YzRs!=D{KR9C0:)Bp4b;$gr~w14JWjTQh0lMJgwA%=bQbu@MX6ej43X' );

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
