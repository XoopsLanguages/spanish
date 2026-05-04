<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: es

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Informes de errores y análisis de rendimiento con PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Mostrar DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Activar Debug de Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Activar pestaña de archivos incluidos');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Mostrar todos los archivos PHP cargados durante la solicitud');
define('_MI_DEBUGBAR_SLOWQUERY', 'Umbral de consulta lenta (segundos)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Las consultas más lentas que esto se resaltan en rojo (p. ej. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Registro de consultas');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Todas las consultas o solo las lentas y errores');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Todas las consultas');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Solo lentas y errores');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Activar integración Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Enviar datos de depuración a la app Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Inicio');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Acerca de');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Volver a la administración de ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Resumen');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Aviso legal');
\define('_MI_DEBUGBAR_LICENSE', 'Licencia');
\define('_MI_DEBUGBAR_SUPPORT', 'Soporte');
