<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          core
 * @subpackage       xoopseditor
 * @since            2.3.0
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 */
/*
 * Assocated with editor_registry.php
 */

// Asociado con editor_registry.php
// Nombre del editor
define('_XOOPS_EDITOR_TINYMCE', 'TinyMCE');
// El valor debe ser el mismo que /tinymce/jscripts/langs/código_de_tu_idioma, por ejemplo, "en" para inglés, "fr" para francés
// Para más detalles, consulta http://tinymce.moxiecode.com/download_i18n.php
define('_XOOPS_EDITOR_TINYMCE_LANGUAGE', 'es');
// LISTA DE FUENTES, FORMATO: "Nombre=valor1,valor2;Nombre=valor"
define('_XOOPS_EDITOR_TINYMCE_FONTS', 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;WingDings=wingdings');
define('_FAILGETIMG', 'No se pudo obtener la imagen %s');
