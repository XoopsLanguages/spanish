<?php

// _LANGCODE: en
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
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Sin permisos de escritura');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opciones de reescaneo');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Marca la casilla «Sí» abajo y luego haz clic en el botón Ejecutar escaneo para intentar corregir automáticamente los problemas encontrados.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Marcar como completado');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Directorio de plantillas (opcional)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Extensión de plantilla (opcional)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.5.12 introduce un cambio importante: Smarty 4</h3>

<p>Lamentablemente, este cambio puede afectar a algunos temas antiguos. Antes de continuar con la actualización, asegúrate de seguir estos pasos:</p>

<li>Ejecuta <code>preflight.php</code> para comprobar si hay temas o plantillas de módulos desactualizados.</li>
<li>Si se identifican problemas, consulta este documento para conocer las modificaciones necesarias antes de continuar con la actualización.</li>
<li>Después de realizar los cambios requeridos, ejecuta nuevamente <code>preflight.php</code>.</li>
<li>Si ya no hay problemas, puedes comenzar el proceso de actualización.</li>
EOT,
);
