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
define('DB_NAME', 'levelup');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '1');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

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

define('AUTH_KEY',         'upl:;}RV+7;+K%}dH[3KTe!%1 NQv-xF[spY!fUB#dG-;j+uUIF;|1;!puU8]T s');
define('SECURE_AUTH_KEY',  '8qV1G{yFP|zCV!nuMe]0sO!B#txeXTGY/Lj4+,mB+OJ#UlE!^5DmA2fyPG_Zk4f|');
define('LOGGED_IN_KEY',    'dn^G`yp4*=x~$S%+9Y>c>dn5UI(DUk8=z_MD)YM*Oy@XoidpJctXY_#C}).Vdh8p');
define('NONCE_KEY',        'mqMm55d=`d|#uSl@W9s,4$@pR_f]PF {y)Br6jkGg(E[N?kqW}HaJw|IX+W&AD4Y');
define('AUTH_SALT',        '=A{mDq2qnTiD9{uo&37^7iLP0|7fF=O^U[=@u c^4v.k/4U#ti~!d^ASG;k.KIv3');
define('SECURE_AUTH_SALT', 'RHQH4jiUP|bd%1e,}>sr?KgIkq+vjyd+-)t|KB|3<PzqGt{ISwhIS~@6Bvo*&8gb');
define('LOGGED_IN_SALT',   '@}7rv}yc =F-6dJ)ok5B4X+:I&r~P{IS0*L+a RJ9c)7W2n6$fJG^09mTxa}~Ai4');
define('NONCE_SALT',       '[5<SNK7/F42)c>vsPFBv|ctjO+wd%Y-YRolnIu/[?<^SMh&_+6~`xIdQHv6bn vd');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

