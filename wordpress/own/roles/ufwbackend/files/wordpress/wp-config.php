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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'rognarock');

/** MySQL hostname */
define('DB_HOST', '192.168.56.42');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b`a3`3J;2Wr{%|>qrb4XtMI.M^^6(Tug.Sx@,8fS%:Hgz!0Oo^w^l7^,?+gh#h=N');
define('SECURE_AUTH_KEY',  '/T$c.`9.Hn8!~ W+&O[&$}KeLX4K5K P94g00Q}[j]B=yrnZ2@g;kb|)cF0Y[v%)');
define('LOGGED_IN_KEY',    'oLXK8:izy2WqGa)Vbt5VM-FX,s`&l }SViPu$~0UFvz9?*,18J$)wLc1lJ5S/[cz');
define('NONCE_KEY',        'WwN4RmC0@uPbXqq`fq!Tz15t$c!?_v[f9PVw,VFWz>sK85VLF6)LF#/vj=5$f9=:');
define('AUTH_SALT',        '!O9]k&<3y9U?/9Eioe0cHfq$[!XO-~jSdCL:B</c&_+E((Rr6i3+$>MI sn(i9Vy');
define('SECURE_AUTH_SALT', ')oAra0c9d+G}N9{$7{,V9,uA4<^[< 6Hp k#Zl#OP<+_73d;na`q:8;k2/l~EMQo');
define('LOGGED_IN_SALT',   'y}o!9FY<v<4LsK]|M)wvA2|)3IXksu/VcbonvmvpxSt*qQ&5mU:t$v)-a4|m|u|+');
define('NONCE_SALT',       ']mp=D}f{D`;-S-9!uP.aVV>W|f@n>K:cwluY%Pr=Zh;`.W255Av$D+!oH9e3/u5y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
