<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Test_locavigne' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '@exyzRFY^X){nk|1~Xh[eD&46yY2?5&BpUBtzW:kOrZ@G[~=`:+c^|uk(`1S!p+i' );
define( 'SECURE_AUTH_KEY',  '7_&EB5e!}%u^T djk[l+x~!i)bhM6ya!1@-o&hh^xBtY=z_=mN:&E.$HR*D-Qa|;' );
define( 'LOGGED_IN_KEY',    '0MQ{R^OBLY#AE#]7YEZxK,Q1Y6`C-);%L]+k{2^o,rz,oW(-V~/1ql()6Bi4;s@+' );
define( 'NONCE_KEY',        'UhpS|Ue_*<*uRE]-uGKJ~{MGFA#xodRNo8zCZgOhJ5gYvr[3/LSWjNfu8UEG}h^k' );
define( 'AUTH_SALT',        'rcWO@LP}8QoPf x#O/hekNdh: wuc{pBiOzn9lyeLsf&Xhm>%::U^%gf>x,FWfA5' );
define( 'SECURE_AUTH_SALT', '8=B@=[(~m{{Fg?E+y?hz[[(gdcttd+,WB+tB6MNVHK)d^m(!#^_#+g~|^(4}=Kf8' );
define( 'LOGGED_IN_SALT',   '.lg)xaa~GEXE8W&o >Q72;oP7J`/z1pU}]`K!sOzM#xkey]z)nzeZ4qJdd~sEsm=' );
define( 'NONCE_SALT',       '$st|-aYb;r}/zI_b34<^n.8ht<B[8q%,Nw8X8U@63@(:WZHhG.Dd|#LEZ={[IEO~' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
