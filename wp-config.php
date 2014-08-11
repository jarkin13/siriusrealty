<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'siriusrealty_test');

/** MySQL database username */
define('DB_USER', 'db_siriusrealty');

/** MySQL database password */
define('DB_PASSWORD', 'l06$TeR3!');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sd99%hFU@iO#5rjXNZv038EGAUxCKuls*lRIlbd!74SN7cdBOlKnhh)UYH%L$v*&');
define('SECURE_AUTH_KEY',  'k3Rsl5xUi)AVNr8yI!E&fJMK4YnPIi#AFv&!6wsgYa!x3AY8o4FJrTr9UpiBtJb^');
define('LOGGED_IN_KEY',    'iduM)t5i6C)%U4(0hWVxGGgLH7n7VA%pNY1C0f4dJyshpG87n@vB!!9K^tIv(c05');
define('NONCE_KEY',        'HQ95!)eEHvcfhM66JJQFpgx5KztPa#Xqsd0iKEzqTpM07LV&yH^mM1LpGEJj&h6a');
define('AUTH_SALT',        ')QuA^pka8W(m722BS!k*DHK3H3&rYzEn#y%7Z^Jz^ATUeezMV82P2oTtZi8aJzd2');
define('SECURE_AUTH_SALT', '^pm&RYEmdfAneSRDG@QwY9C8(M@nqOuD^EmGvawd87r6uUadceKM8nE#jKVFrg3z');
define('LOGGED_IN_SALT',   'wNrMPsIcoaEdSz)*6JHZj9kOnfoyg1wwftmSb0EePkwx)@ayZ&C229cp2SygiWb2');
define('NONCE_SALT',       'xL1dXc##HYD6ovxiZM0wsTSze*g5uO0KGpOZ01#OI2&!DMVsnrT$kx*yX&DFNaG^');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
