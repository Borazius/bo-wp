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
define('DB_NAME', 'd02822bb');

/** MySQL database username */
define('DB_USER', 'd02822bb');

/** MySQL database password */
define('DB_PASSWORD', 'BX2PVZK9VJg8EUacrVXr');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'c>pmSBW(5dH(=GZ*8HK8|dq3:@9..vCo76^hU8niz8n:]KAsqk-pP|$h><tJ49<I');
define('SECURE_AUTH_KEY',  'Mx3$2#k/9[Ft)fixRtj%rlk3*aZ<xucHotJ#v801qS&w<nrld^oXL]iT@Fn;=Sa.');
define('LOGGED_IN_KEY',    'J./BD=Q7oV1-F$v-ahc/GNaesQ!2(a>OmKp3fCHVwWb@ZZJ=D0Jj[-PQ]Qab5}4#');
define('NONCE_KEY',        'K%53GZh@4K_l)+,J9S6s_eF=9*}K)4MQ8`c]=M{Ow[>}eGJ{y_pYF8u]@u+F+Uv@');
define('AUTH_SALT',        'Z{R+x##V?!=dK;_,.;OD2/b*7*2j!P#[MSdHTe|qf<W3U9=aQj&bvfi/nywnKxKw');
define('SECURE_AUTH_SALT', 'N2A$t?t]YNn1e-o9utym[ezL`s=.nf&>vEAmc8K?d;MKF?c=5^-oE)>(zX3kA8,9');
define('LOGGED_IN_SALT',   '[J(@`P^Fj-p3JTM^5WOW_k][EmIe(R{az$#]S_%@jsP6J|r]VC680prS`=:em7Hj');
define('NONCE_SALT',       ':IIl+L/rB]+j[zH4@]IMO=#1W;tGP>3ieYWm)dbHBk5|g[2):YTgtVuNolsB,).o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qc63x_';
define( 'WP_POST_REVISIONS', 10 );

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