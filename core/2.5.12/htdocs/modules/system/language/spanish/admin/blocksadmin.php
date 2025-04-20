<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// Navigation
define('_AM_SYSTEM_BLOCKS_ADMIN', 'Administración de Bloques');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', 'Gestionar');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', 'Añadir un nuevo bloque');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'Editar un bloque');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Clonar un bloque');
// Forms
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'Bloque Personalizado');
define('_AM_SYSTEM_BLOCKS_TYPES', 'Todos los tipos');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'Módulos');
define('_AM_SYSTEM_BLOCKS_GROUP', 'Grupos');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Página');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'Mostrar bloque ');
define('_AM_SYSTEM_BLOCKS_HIDE', 'Ocultar bloque ');
define('_AM_SYSTEM_BLOCKS_CLONE', 'Clonar');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', 'Izquierda');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'Superior Izquierda');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'Superior Central');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'Superior Derecha');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Derecha');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'Inferior Izquierda');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'Inferior Central');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'Inferior Derecha');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Pie de página Izquierda');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Pie de página Central');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Pie de página Derecha');

define('_AM_SYSTEM_BLOCKS_ADD', 'Añadir Bloque');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'Gestionar Bloque');
define('_AM_SYSTEM_BLOCKS_NAME', 'Nombre');
define('_AM_SYSTEM_BLOCKS_TYPE', 'Tipo de Bloque');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'Bloque Lateral - Izquierda');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'Bloque Lateral - Derecha');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'Bloque Central - Izquierda');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'Bloque Central - Derecha');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'Bloque Central - Central');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'Bloque Central - Inferior Izquierda');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'Bloque Central - Inferior Derecha');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Bloque de Pie de Página - Izquierda');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Bloque de Pie de Página - Central');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Bloque de Pie de Página - Derecha');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'Bloque Central - Inferior');
define('_AM_SYSTEM_BLOCKS_WEIGHT', 'Peso');
define('_AM_SYSTEM_BLOCKS_VISIBLE', 'Visible');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', 'Visible en');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'Página Principal');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'Todas las Páginas');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', 'Sin Asignar');
define('_AM_SYSTEM_BLOCKS_TITLE', 'Título');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'Contenido');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', 'Etiquetas Útiles:');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s imprimirá %s');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'Tipo de Contenido');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'Script PHP');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', 'Formato Automático (emoticonos habilitados)');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', 'Formato Automático (emoticonos deshabilitados)');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'Tiempo de vida de la caché');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'Bloque Personalizado (HTML)');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'Bloque Personalizado (PHP)');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'Bloque Personalizado (Formato Automático + emoticonos)');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'Bloque Personalizado (Formato Automático)');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'Editar Plantilla');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'Opciones');
define('_AM_SYSTEM_BLOCKS_DRAG', 'Arrastrar o ordenar el bloque');
// Messages
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', '¿Está seguro de eliminar este bloque? <div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', '¡Los bloques del sistema no se pueden eliminar!');
define('_AM_SYSTEM_BLOCKS_MODULECANT', '¡Este bloque no se puede eliminar directamente! Si desea deshabilitar este bloque, desactive el módulo.');
// Tips
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>Puede cambiar fácilmente la posición lateral o de orden con la función de arrastrar y soltar, haga clic en <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> esta imagen y configure su sitio exactamente como lo desea</li>
<li>Añadir un nuevo bloque personalizado</li>
<li>Establecer el bloque en línea o fuera de línea haciendo clic en <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> o <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /></li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Pie de Página Izquierda');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Pie de Página Central');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Pie de Página Derecha');
