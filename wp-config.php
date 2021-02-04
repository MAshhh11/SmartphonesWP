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
define( 'DB_NAME', 'smart' );

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
define( 'AUTH_KEY',         '5OqkA:71Ho=MZ 6]nPSk&I]7MRru2Km:u0]DzaW3O@aAEy5xwI4$:dj,B VBtY/-' );
define( 'SECURE_AUTH_KEY',  'PP|QVTjVprA;J%Qir[D~UqH|Ub zre8T!j|,Bq<-wFW y9H2sG:Mw@L[LF7lD|3V' );
define( 'LOGGED_IN_KEY',    'O7h>%P`MPXXy>E(TysK&8`sT!PZuF$d<TYbTrnBf?(ZzRb&Sr&P<KxZw*}rab9O#' );
define( 'NONCE_KEY',        ':*Z)!:(inFjx{~>rXq-7&TA*&Rjg`G~~j~HpA,:6C7m6TO)3J-FhE.-,X{;(go3u' );
define( 'AUTH_SALT',        'oa)t3oPaYdrQ*==]Uv&~i(7JNC;exvW:iG.mQ}{Q9~YF?_:9@|D>;A+vO:i)L82I' );
define( 'SECURE_AUTH_SALT', 'VDA-XNClS!yXWDz``+1eI ?;zqiM4z=8!.3VjrG?G%#5ku~jyp wZ<[GZ`p{bJB^' );
define( 'LOGGED_IN_SALT',   'wgRwgtfQly5bOrHx&z@JS-g-I!?T#c?7AvE>wA/F#9i}D0__WNWQVXf KBB/Nx9H' );
define( 'NONCE_SALT',       'cfF2D3m^jqFzZjm2VW!%#G@{[/CAt=|k@Tk*QxW>Pj0iR9t:a@ttYKvn?8EZdkrn' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'sm_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
