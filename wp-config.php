<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'site_h');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GR{+zPYW1pL`jiKR}|ZF`zV-/zf,z~H@W-0:1Q/TUTcP-N92u_0)z]>}[S]ae`aY');
define('SECURE_AUTH_KEY',  '9]WF1%AH31LPU7wYA <kdpzp;9=Oz{bs@=T@LY+De,7dae|DLS?u[}.BGo$v#X|c');
define('LOGGED_IN_KEY',    '/&IhS&EARrANl6E=bYV0KO,T:1n dU3 )l@;!LV!s$W#z 4Mcl:Oc<a^32>j-ZZ/');
define('NONCE_KEY',        'bohD;7^|NCr+INJKG3{e2APm7^>{JAc^:+,54p*zF5pbVjl5f5?OrTUg$CA{Y{3L');
define('AUTH_SALT',        '&Z^<?^wz _*lthfQ#O!H,:Y&q:X485;a?ElH^x5vx7-(f8)C?@,RZ5:ZlMx-pou&');
define('SECURE_AUTH_SALT', 'l{T5*_ZwcD}91fN0B!DDgp>/lExN,]]_&sxA$||K(Qne:%(J,@FahMt3{6<D8J<M');
define('LOGGED_IN_SALT',   '_C5b0h_:>DjH1<%%mTvYT(MH`z{8Q^x@>62]QB^ZWDZi.<&X>-3^$u9U73a{?:S)');
define('NONCE_SALT',       '+;+X?C%8)[qzdY~x#knPPCBl|?</I2elP/*w$tA^O63-x&o12{.Uds8-XRBbpp@;');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');