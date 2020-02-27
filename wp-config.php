<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ulteriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'testwp_db' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L?Ed!vPX{Bz|Oou ACS@A;v8|KoNVq# >gp}I_ lD_on`3yL>n?6TmiCP}^M9Ye0' );
define( 'SECURE_AUTH_KEY',  'Y}6ZM(|u}>)[Myr(0MdGI`l3Nh&p-a1LF]^HP?,xyPBAf#-l74G56X$y_#74-=Ns' );
define( 'LOGGED_IN_KEY',    'lHF}]?89k:}G3!OFTb%m4$BZdXn opJXOo5<<7=65wi]bL3urC&G4O-dy+e8eeaJ' );
define( 'NONCE_KEY',        '0h$ec`3tqfYvU+;yQpy=J{nzRO;FS3!_3e0S=@05fdeydKM`V~^@>X);Z9>kXw$]' );
define( 'AUTH_SALT',        'x]/xCO6@;K`@-ao^d+lTOZTXy8&6/oV*3(.I(|;ebKXiY_?Je{~[&w$C!^$}_+nc' );
define( 'SECURE_AUTH_SALT', '^PscT`c@C2lHWyJ*{Q `Z},Korp}05hyQ#Vl{9W:,eWSn-n~:z`zLE{.J0{m-me2' );
define( 'LOGGED_IN_SALT',   '.16/QV:1g=.2/_n=drUFg=^&U-?aFV@wMrhAo7ofQ! 7p@UOc@qOLYBL}$|D(3fk' );
define( 'NONCE_SALT',       'cZ$jK`lfs$5W!d~`$P}1Dbf!ey;!+~~i(nt+DgaZOE$bJU>.dB8s3VpQ00IfodwU' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
