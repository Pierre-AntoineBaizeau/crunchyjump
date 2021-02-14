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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{E.cv[%O+yT:KrBWuxB%n+m6}CU69aW]<W7024Cuy.};|U?*`nm8$Vf;b#4)HA%^' );
define( 'SECURE_AUTH_KEY',  '-cB%b1Jo$iFV1VgqeD#UAr#)_iY,+do`__wY_L`9@P)6?nc:#c5wvEMc]x:7(<oJ' );
define( 'LOGGED_IN_KEY',    'O5d{r?>R<kt(5w$_>Ixj&8G.u%r?%4`d%a8^{x~8P:/azs qMMH=cP@W*3L)S%Dh' );
define( 'NONCE_KEY',        '; 1~4etCVxLD1}0mU[MB&[f EP7H|WxF]96MVata98uuM:oF=S7 k$x&l~s4n5T;' );
define( 'AUTH_SALT',        '!7.37HDrDk!e/83N%xZy1Ax(]OXPO+R$N-k8UuRN~kKP<MW,K_ X4^m|Dj{Yonl-' );
define( 'SECURE_AUTH_SALT', ']s:k2];;uU9<8}HKZHcc<&TCE>C<u{+jBUv#1 R[DS)Yw%j>u.Qtk/lWc0CRLP_|' );
define( 'LOGGED_IN_SALT',   'T#^011jR)U: +H4>*VI+E%UOoJ* pmJU 8lnsUHusZsMAw3U|B;yDHx|`Inz1g%3' );
define( 'NONCE_SALT',       'KMgm9UAW$hHC_^CMWHg4j(9&pRZ7#yp`Uom!-<>LO:y4(<S9U++EcYOSPxX2%8][' );
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
