<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp0617962');

/** MySQL database username */
define('DB_USER', 'wpuser33583');

/** MySQL database password */
define('DB_PASSWORD', '1k8601Kx5mMx5n2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'C@S|>%/SiH-N^a3Zm_?)];|+oGM|XlL=w^{$k>Sy@GyKp$B1J*VB(~;v%IX]OPo%');
define('SECURE_AUTH_KEY',  'l|DWjJJ:1l=;xi`]ZlZAk~ha=a{;m-@$3x[/#xgqMNg#j! Hl+0)[waZUpgf{}Tf');
define('LOGGED_IN_KEY',    's-a-0qvyQn;|>.1?-#f<Y}prrtk/_kU.T8%Q=#vjz.`8TYa@@t--ccvG^*!6EAk*');
define('NONCE_KEY',        'stn4*j+}r BGFtPs!slyrrX=CQjI2w[e8c*D2|#Yx3v49W~ZG2*In)dKGfl+fx)F');
define('AUTH_SALT',        'MGu+mI)2cKZu^wmt(Z=-JIwg+qq;YcZ2keq+%TRr}D,3l@r1~AZY:+1KW+qbMg.X');
define('SECURE_AUTH_SALT', 'RoR?Y,)(EFz?-kuZ1]+J0fEG)k0L#NY<&Y^@(*0t?L,yNO tdH&v/B$r Z:!RB#$');
define('LOGGED_IN_SALT',   '{NbmD 9%?Q]}RLOBnQ4Nrrt+r^7k`|>F6MQuy{~fp{Nbs_%|p!EI ^+{:M?e`[0u');
define('NONCE_SALT',       '/o(KSq1A &sX#aOQ?+F-Ir+/OVl~Z]$=k*oici#Uu^PS(nk)|qh}$nl;|rfX/]m.');


$table_prefix = 'wp_';


define( 'FORCE_SSL_ADMIN', false );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
