<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'Tema');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j3otTRW~:^Y2I<fvm6&8RPddaCfc1ru2Zz4E-~I}lTr.s_)xc/@,|_7xx8>Xm?|t');
define('SECURE_AUTH_KEY',  '>l0<zruw? =K!2 ,VVy6_y/im$s{lH1E;{ZRucA41v;RI)pSa8;&`Bl<K2g,%?yT');
define('LOGGED_IN_KEY',    'UDMVFHYbn-um%x@jYx!|m0.)}m5y(+_e%^Z?1Je`[0P,FHHOV.kpcbTt9ob<3.`]');
define('NONCE_KEY',        '9X|vK# AHGAO3:>U{w0X9:KT(VD5j[.=2qimiAUq AePAR8ZC#KQxU,ec{y?Do<j');
define('AUTH_SALT',        '30pX;PO[xh0=&^f#ih,Ag7;zEgFHKUpG#pzso?`WK`o(^$4aO-4P/EwBxn5:d[xS');
define('SECURE_AUTH_SALT', 'uN0tEk)pmPbnZMpTX_mt/J~2Cf$^%%}^ */i`:7[FW#U5K+I]tLUWEIfB5;.`Pt2');
define('LOGGED_IN_SALT',   'Y]Mi{N:G !K`i%(%nHBIwy;8)/:_Gihm@-qpNmDsw[.~fH=@Z1(7y/epWi!8CV<`');
define('NONCE_SALT',       'hv_;gw=zOrT LocE_JXed:%DeD-F$L#B<GgzV|FxqH5$`gn6[ZskX|E{]gc68KY5');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');