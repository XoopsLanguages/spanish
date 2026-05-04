<?php

// _LANGCODE: es
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Mejorador</h2>

<p>
<em>Mejora</em> examinará esta instalación XOOPS y aplicará los parches necesarios para hacerla compatible 
con el nuevo código XOOPS. Los parches pueden incluir cambios en la base de datos, agregando configuraciones predeterminadas para nuevos
elementos de configuración, actualizaciones de archivos y datos, y más.
<p>
Después de cada parche, el actualizador informará el estado y esperará a que continúe su entrada. en el
Al finalizar la actualización, el control pasará a la función de actualización del módulo del sistema.

<div class="alert alert-warning">
Una vez completada la actualización, no olvide:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> eliminar la carpeta de actualización</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> actualizar cualquier módulo que haya cambiado</li>
</div>

EOT,
);
