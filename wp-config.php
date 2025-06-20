<?php
/* SEGURIDAD */

/* Desabilita la opcion de editar temas y plugins desde el admin */
define("DISALLOW_FILE_EDIT", true);

/* Quitar mensajes de error en produccion para que el hacker no vea data
(Solo los oculta no los resuelve)
*/
define("WP_DEBUG", false);

/* Obliga que usemos https para que contraseñas no viajen en texto plano.
De lo contrario alguien en la red podria hackearnos
*/
// define('FORCE_SSL_ADMIN', true);
// define("FORCE_SSL_LOGIN", true);