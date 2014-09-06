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
define('DB_NAME', 'votre_nom_de_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'votre_utilisateur_de_bdd');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'votre_mdp_de_bdd');

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
define('AUTH_KEY',         '7za7W2xb+z,3)1{DgYMZ?:<r%cHrk@+m_M/*y3,fTk3cj-h:pqB:4!LjR0 5iMRU');
define('SECURE_AUTH_KEY',  '!%O$P +#p3$sI6Z5KSC.OQ5<|)[?TI/MLYXIO6;juMe-`YBYR!tT[&<`VK--FFcA');
define('LOGGED_IN_KEY',    'OsCz+Y45G(!-1|86V>JlmF7{_I!0!.LG6lM07,_PpM<i8%]q&_T60QFLYEtyB!&6');
define('NONCE_KEY',        '| *BD=][+g*=+qq9_nG(PsD4h%.Z$@u,.|lIa.5M*Bs)tj3?vMssSt<PX;t>a ^A');
define('AUTH_SALT',        'g7qpdzJ.;_0=+fQ]Ik@RggAzP{s|zY,GGH&)t3mY8+#kiS4|-O*~ cl!z&T3f CK');
define('SECURE_AUTH_SALT', 't;rRv*?sN!iQ++Fz}2E$h(+N;1rWc5N,:@_T9-T3+;x9!xqI:QQFB3~ v-V5*wD9');
define('LOGGED_IN_SALT',   'h8x|K$^ |H3a9hOAYWb^N+pMH5F[!|;hZ_Z|-@/>-rM;F1nL=;4IJVfboub~/A%.');
define('NONCE_SALT',       '{%>ZH&eWmga2-1ly64g :PL%!]B7L(H9pjrTqDOdlpf1s=|8yT! Px=YxMQZ/)[9');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'slorany.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');