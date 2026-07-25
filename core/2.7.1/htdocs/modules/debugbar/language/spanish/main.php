<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: es

define('_MD_DEBUGBAR_DEBUG', 'Depuración');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Archivos incluidos');
define('_MD_DEBUGBAR_PHP_VERSION', 'Versión de PHP');
define('_MD_DEBUGBAR_NONE', 'Ninguno');
define('_MD_DEBUGBAR_ERRORS', 'Errores');
define('_MD_DEBUGBAR_DEPRECATED', 'Obsoleto');
define('_MD_DEBUGBAR_QUERIES', 'Consultas');
define('_MD_DEBUGBAR_BLOCKS', 'Bloques');
define('_MD_DEBUGBAR_EXTRA', 'Adicional');
define('_MD_DEBUGBAR_TIMERS', 'Temporizadores');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s tardó %s segundos en cargar.');
define('_MD_DEBUGBAR_TOTAL', 'Total');
define('_MD_DEBUGBAR_NOT_CACHED', 'No almacenado en caché');
define('_MD_DEBUGBAR_CACHED', 'En caché (se regenera cada %s segundos)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(cadena vacía)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool VERDADERO');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSO');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Consultas de base de datos');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Uso de memoria');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d consultas');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplicados)');
define('_MD_DEBUGBAR_BYTES', '%sbytes');
define('_MD_DEBUGBAR_DB_VERSION', '%s versión');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Número de error: %s Mensaje de error: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Error #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Excepción');
define('_MD_DEBUGBAR_RAY_QUERY', 'Consulta #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LENTO');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Bloque (%ds almacenados en caché)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Bloquear (no almacenado en caché)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Volcado');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Contexto de plantilla');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(sin variables de plantilla)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s(%dvar.)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'El directorio "modules/debugbar/%s" no fue creado');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Error al crear el directorio "%s" durante la copia del activo');
