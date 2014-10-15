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
define('DB_NAME', 'nomade_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '%OPX|-wA]>j-+_z#}^?Z/Cul.(TS0&`NiTq-||o@(}+i=t6-r`ZAP-Q4dAbyh;4V');
define('SECURE_AUTH_KEY',  '1Uk+,>lD3+Z?^ n4QaNS8l~2B1vCq+=4Dq=KQAW-i]wXaRB|LBMt]:E*G1zI<vcE');
define('LOGGED_IN_KEY',    'pA@JRjF,ORJL>3c[+ndS`,-&cAL{/#emr+D3E!.d#S}brnm.EqVC7l]Z}0Vg1z97');
define('NONCE_KEY',        '0zYOB3ij0j(RD0hqd<PowW$sF|u< GzYU=qcU{-gs-I =H+;P$(ry5-(3pTse??C');
define('AUTH_SALT',        '9N@+biEt`~hI[g$_8s-$a>-0%{$? *0e@T[bnQq3sm=TiqN84KDrWr_AQqSe+Gp#');
define('SECURE_AUTH_SALT', '-}c]]TyufTF_I/}0i$>o!knJpsLZhL-Q&yY| _THm>[-E?Zfqh|O=?QM2ftDB-f6');
define('LOGGED_IN_SALT',   '`PH#}DtC#}9<48q@<DL|pIzXNl;ZH6XPn/md!t+NY;-ew-O|[-E7DC{reUXTW|h|');
define('NONCE_SALT',       'ShA-O lZt >G>ea&D2T6tZW%=2T:(OSDh,zsQO%:[7cZ|+9_k943tYhZKE!-3M)9');
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
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');