<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'myfoodstory');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EnmsnTu`(K<<4u`%EEr6yxeb7/ 2KP`ifg]Pz4FB|/rX;6Zv)c?P :wk2Pt3F6#+');
define('SECURE_AUTH_KEY',  'Mu~j_,<:;wsmYCXL{;yMDq@6mcIq8}Y$GuGkomc(*6JS-b9{6C4$x~J5T1w]BMk`');
define('LOGGED_IN_KEY',    'xX/`0t~3UlEIaORloK*Qg9,$a63F-0yZ:W*e)0afU[x][O$6<0quRdG]KS&WSW:X');
define('NONCE_KEY',        'N:0-{KK@3CS8b=e)3R;rb{FB m #aKkexG^SBnJ;?M#Z_~P?TkkRT3y}/P:tV=%g');
define('AUTH_SALT',        '!4{;>oR7.gFW2jsU*C3N/M%~uRr+`J2et|tL}e%ZoZ|rFE^1G:mO;%}4TCS`WU#d');
define('SECURE_AUTH_SALT', ',=fv`h^k^%r=U=O||w@6CinwpS6@cwqhlJPxn^/V^/]EKrwLC#17cl/eD8#_A]_f');
define('LOGGED_IN_SALT',   'PZMbu3.OC7m)ObJPU8L,frcW!N/tX37~mMf{j7,Z;J9usAvr 0JI_i2{5>G218qa');
define('NONCE_SALT',       'z*PDC7HPKB_JQA3K&jEhL@MAL:21Vv|L&q;dMUULFU83J3SRxfxOy$_/Js%T@:`D');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');