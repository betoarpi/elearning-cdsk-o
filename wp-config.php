<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'cdsko');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost:8888');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xqxD>~=OBF8#i:%_|5mUG$+4L&vB8`!83-h<3DJ+La$-kJdRR<tzOA_]I?@%B5K-');
define('SECURE_AUTH_KEY',  '{kY1c,<fj[/64F0$XCu[UE/6Y08ZRSgY!>#ObHG!Jy+HrS|LTtW/w;i.+Wf&s8zR');
define('LOGGED_IN_KEY',    'ry[dk|g_5tWL4{-DJMei#Rb-%>@=12coEh [#jXN!(r~062ngGtuD{#2T 1NAh| ');
define('NONCE_KEY',        '$T#--W#(7/NF~bGNYrOBP}:,w|{x)1Nxc}MjLz[u7OYmZj_.;sU` O+<Gk-O mAF');
define('AUTH_SALT',        'Tww7G7*w^4*%zb4Iw|.KS7L`[}xwg31_1x,Cf933oM4RC++wve!h-%PHob{!4I5#');
define('SECURE_AUTH_SALT', '}i]-%sRhw36ck83NIQl4^I8UYVq`I{v:@*oVH<Q**Hel+V`j=[qWlX$Qgw|K$~Q+');
define('LOGGED_IN_SALT',   'ggisIkbN51DzgkRDh=p3/>{!`eL+}7e5jJ7+vRG}gBV1f3M0~kw3~`RP(Z|3&v-1');
define('NONCE_SALT',       '^i-ow4a$FU qk@v2w?TP.[+1[+{-m=:DSr/-mqQQ$ri>2Sb2;<5l0/R}KvQ|Y8<N');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

