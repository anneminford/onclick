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
define('DB_NAME', 'onclick');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'g[q~9%vQq<PSfcvK|k9ZrGfY~d<6H3Ej{stp6#B`fRV~.oX5lw-(E_Y!Z4+9aTui');
define('SECURE_AUTH_KEY',  ']R@tn,y&8lX^RSRuN6B}X}=6%IC5X7Qeo#Ur+H0s)ha4B{dJ.(QDParzxin/Y2Ww');
define('LOGGED_IN_KEY',    'F^ugYRQ%C r!Rl9|t[31ID]p&U/b+Lb8.7d%]d,@-!b$UkD-?C4oe0*-{=9(NWkO');
define('NONCE_KEY',        'b;nIoQZ7S$U<~i1c3eTVup9%OXCNjsixX}2i0mdvS{x#kWt4-aSiV)CCV %fQKW,');
define('AUTH_SALT',        'H<~t!3YMiqZBX]bIH,*BQ@|W28CnLp@B>P*r 7uBc<d|r({&:#pYR0$Dpo?`zw`O');
define('SECURE_AUTH_SALT', 'DaC1d(3Y;HZ<%c*4M74VKYk/dD5o01E]~e+DM%Hid%+3GT7Du-x*Vam*8yD7DU8J');
define('LOGGED_IN_SALT',   'r*Kx*A.Nq>p5|Hoy)9S:-UY}WG`c&{YG<fJB,|^G^l;cO 3)CDP{d&7Tt[d)W;2Q');
define('NONCE_SALT',       'a|`g`YpiKW::d$ ,7we_fL1vpL_Smo[0E*3imwhm445ouF]2(&B0;PLF+R8p`V+P');

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
