<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'wphajtek');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U)6!l{U= t$zaqX)eBvGp!~4Y6:<{o~+,7SMMA-y.1gh(aZ2TU8wyca[ApX/eGrC');
define('SECURE_AUTH_KEY',  '?@G?5kP[un4E2wsFAn{:Tnk?c)b~`dn }x M5f7Rt=[/#^_3-TsK0K |e`->p>l/');
define('LOGGED_IN_KEY',    'Bc<[]LCYAexNH)d-=& <I=TJICW$-EIFQYXuMi..eB)+-s&Q{5E0eJ*jlg+~NO3E');
define('NONCE_KEY',        '0lC6zj+AE26W{p!@mV WC_[[t?w.t8Wi&0-)5Ag3`7<y&o_>d5H^p1I}I_1`;FEO');
define('AUTH_SALT',        '>vC:j#Y6jYGGL]SR}ZBii],kv1.Y9Iy,`fS(!i3)m2=$K$6>|Rw{Nz819||;y1U`');
define('SECURE_AUTH_SALT', ' rBs5@61yiQG8AN4>8][-lv=/&J@kt|#dqyb!D_|XTX;UN]>PI^n&+*Ba5!OGj:O');
define('LOGGED_IN_SALT',   'pkVtI6h!vZy=VY%4;2+R|fTnM9B/f7=a#moFJ<o:*C,s{L,RL6+<J.G_B!`C92_+');
define('NONCE_SALT',       '##%&&Pul7J0[UmY<DIEA5AZ9;to[Zq53YH~JUZGd`1n:^OFU0.0 KuaCTvw[:|-J');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
