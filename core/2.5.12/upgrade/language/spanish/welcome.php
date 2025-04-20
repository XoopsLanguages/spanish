<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>Actualizador de XOOPS</h2>

<p>
<em>La actualización</em> analizará esta instalación de XOOPS y aplicará los parches necesarios para hacerla compatible
con el nuevo código de XOOPS. Los parches pueden incluir cambios en la base de datos, incorporación de valores
predeterminados para nuevos elementos de configuración, actualizaciones de archivos y datos, y más.
</p>
<p>
Después de cada parche, el actualizador informará del estado y esperará tu confirmación para continuar.
Al finalizar la actualización, el control pasará a la función de actualización del módulo del sistema.
</p>

<div class="alert alert-warning">
Una vez completada la actualización, no olvides:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> eliminar la carpeta <code>upgrade</code></li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> actualizar los módulos que hayan cambiado</li>
</div>

EOT,
);
