<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K9Vb[*$.xmuh}^{N|b0)TZy[#: ulp]xuE<D!W5)p!}yAq=,@#q4R/(J5D0$9Y8?' );
define( 'SECURE_AUTH_KEY',  'J@?4o]MZo%H:tsV)n]M~HocTsS.xGqj}r#`2RDCzC5CY0`jk=D.vp>R#xzutGib.' );
define( 'LOGGED_IN_KEY',    'w[`!C<h!HOEEoN;?2*o0h=A_70vo(@_(046>=-;SZ{] .jcR6z=v}P=,A[:Q3=6%' );
define( 'NONCE_KEY',        ':Uq.9LMoJ!ydAV29ZR^cAS7bR0fOeO7aIubHv k=VH%{W$>t0E`IS<OmZkv+9;|#' );
define( 'AUTH_SALT',        '9d4Qxc9@!/@JB+I!TH@Y -H`t4vMJw>4x<sm1$w8L#c+L$h81YpDF?NAR9{(.py3' );
define( 'SECURE_AUTH_SALT', '/vS1WaKd(ydE|UgfQd-?d<81b}Y[L{1kE5y#Y&==`_QH H=~]V.3yIgB7h iNhWL' );
define( 'LOGGED_IN_SALT',   '`s;J9K(wl5B;Q~J>@zpj[TF5gYQCFK*lmMum%L&1Hv(oQ0bT:=z=FnIgkDhl:@{o' );
define( 'NONCE_SALT',       '~t pJ?ZN){Rhh2NaDBA5BLyH;ovJ<TjU&s|})Z&<TET52T-Vm36{g/@h@Jq^J%kN' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
