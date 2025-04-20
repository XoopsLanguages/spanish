<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
//Nav
define('_AM_SYSTEM_MAINTENANCE_NAV_MANAGER', 'Mantenimiento');
define('_AM_SYSTEM_MAINTENANCE_NAV_LIST', 'Todo el mantenimiento');
define('_AM_SYSTEM_MAINTENANCE_NAV_DUMP', 'Volcado');
define('_AM_SYSTEM_MAINTENANCE_SESSION', 'Vaciar la tabla de sesiones');
define('_AM_SYSTEM_MAINTENANCE_SESSION_OK', 'Mantenimiento de sesiones: OK');
define('_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK', 'Mantenimiento de sesiones: Error');
define('_AM_SYSTEM_MAINTENANCE_AVATAR', 'Purgar avatares personalizados no utilizados');
define('_AM_SYSTEM_MAINTENANCE_CACHE', 'Limpiar carpeta de caché');
define('_AM_SYSTEM_MAINTENANCE_CACHE_OK', 'Mantenimiento de caché: OK');
define('_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK', 'Mantenimiento de caché: Error');
define('_AM_SYSTEM_MAINTENANCE_TABLES', 'Mantenimiento de tablas');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OK', 'Mantenimiento de tablas: OK');
define('_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK', 'Mantenimiento de tablas: Error');
define('_AM_SYSTEM_MAINTENANCE_QUERY_DESC', 'Optimizar, verificar, reparar y analizar tus tablas');
define('_AM_SYSTEM_MAINTENANCE_QUERY_OK', 'Mantenimiento de base de datos: OK');
define('_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK', 'Mantenimiento de base de datos: Error');
define('_AM_SYSTEM_MAINTENANCE_CHOICE1', 'Optimizar tabla(s)');
define('_AM_SYSTEM_MAINTENANCE_CHOICE2', 'Verificar tabla(s)');
define('_AM_SYSTEM_MAINTENANCE_CHOICE3', 'Reparar tabla(s)');
define('_AM_SYSTEM_MAINTENANCE_CHOICE4', 'Analizar tabla(s)');
define('_AM_SYSTEM_MAINTENANCE_TABLES_DESC', 'ANALYZE TABLE analiza y almacena la distribución de claves para una tabla. Durante el análisis, la tabla se bloquea con un bloqueo de lectura.<br>
CHECK TABLE verifica una tabla o tablas en busca de errores.<br>
OPTIMIZE TABLE recupera el espacio no utilizado y desfragmenta el archivo de datos.<br>
REPAIR TABLE repara una tabla posiblemente corrupta.');
define('_AM_SYSTEM_MAINTENANCE_RESULT', 'Resultado');
define('_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT', 'Sin resultado');
define('_AM_SYSTEM_MAINTENANCE_RESULT_CACHE', 'Tarea de limpieza de caché');
define('_AM_SYSTEM_MAINTENANCE_RESULT_SESSION', 'Tarea de limpieza de tabla de sesiones');
define('_AM_SYSTEM_MAINTENANCE_RESULT_QUERY', 'Tarea de base de datos');
define('_AM_SYSTEM_MAINTENANCE_RESULT_AVATAR', 'Tarea de purga de avatares no utilizados');
define('_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE', 'No se seleccionó ninguna opción para el mantenimiento');
define('_AM_SYSTEM_MAINTENANCE_TABLES1', 'Tablas');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE', 'Optimizar');
define('_AM_SYSTEM_MAINTENANCE_TABLES_CHECK', 'Verificar');
define('_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR', 'Reparar');
define('_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE', 'Analizar');
// Volcado
define('_AM_SYSTEM_MAINTENANCE_DUMP', 'Volcado');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES', 'Seleccionar tablas o módulos');
define('_AM_SYSTEM_MAINTENANCE_DUMP_DROP', "Agregar comando DROP TABLE IF EXISTS 'tables' en el volcado");
define('_AM_SYSTEM_MAINTENANCE_DUMP_OR', 'O');
define('_AM_SYSTEM_MAINTENANCE_DUMP_AND', 'Y');
define('_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES', 'Debes seleccionar las tablas o módulos');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES', 'Sin tablas');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES', 'Tablas');
define('_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES', 'Estructuras');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS', 'Número de registros');
define('_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED', 'Archivo creado');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RESULT', 'Resultado');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS', 'registro(s)');
// Consejos
define('_AM_SYSTEM_MAINTENANCE_TIPS', '<ul>
<li>Puedes realizar un mantenimiento simple de tu instalación de XOOPS: limpiar tu caché y la tabla de sesiones, y realizar el mantenimiento de tus tablas</li>
</ul>');
