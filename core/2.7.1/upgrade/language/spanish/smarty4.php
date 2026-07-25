<?php

// _LANGCODE: es
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'Migración a Smarty4 de XOOPS');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Resultados del escáner');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Ejecutar escaneo');
define('_XOOPS_SMARTY4_SCANNER_END', 'Salir del escáner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regla');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Coincidencia');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Archivo');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Cantidad de correcciones');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Revisión manual requerida');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Se puede corregir automáticamente: se cambiará el nombre de la variable de elemento para cada elemento agregando "_item" (por ejemplo, "foo" se convierte en "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Sin permisos de escritura');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opciones de reescaneo');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Marca la casilla «Sí» abajo y luego haz clic en el botón Ejecutar escaneo para intentar corregir automáticamente los problemas encontrados.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Marcar como completado');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Directorio de plantillas (opcional)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Extensión de plantilla (opcional)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introduce un cambio significativo: Smarty 4</h3>

<p>Desafortunadamente, este cambio podría alterar algunos temas más antiguos. Por lo tanto, antes de continuar con la actualización, asegúrese de seguir estos pasos:

<li>Ejecute preflight.php para comprobar si hay temas o plantillas de módulos obsoletos.</li>
<li>Si se identifica algún problema, consulte este documento para comprender las modificaciones necesarias antes de continuar con la actualización.</li>
<li>Después de realizar los cambios necesarios, ejecute preflight.php nuevamente.</li>
<li>Si no hay más problemas, puede comenzar el proceso de actualización.</li>
</p>
EOT,
);
