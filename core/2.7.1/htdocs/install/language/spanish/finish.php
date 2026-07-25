<?php
//
// _LANGCODE: es
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Tu sitio</h3>
<p>Ya puedes acceder al <a href='../index.php'>página de inicio de su sitio</a>.</p>
<h3>Apoyo</h3>
<p>Visita <a href='https://xoops.org/' rel='external'>El proyecto XOOPS</a></p>
<p><strong>ATENCIÓN :</strong> Su sitio actualmente contiene la funcionalidad mínima. 
Por favor visita <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
para obtener más información sobre cómo extender XOOPS para presentar páginas de texto, galerías de fotos, foros y más, 
con <em>módulos</em> además de personalizar el aspecto de tu XOOPS con <em>temas</em>.</p>
";

$content .= "<h3>Configuración de seguridad</h3>
<p>El instalador intentará configurar su sitio por consideraciones de seguridad. Vuelva a verificar para asegurarse de que:
<div class='confirmMsg'>
El <em>mainfile.php</em> es de solo lectura.<br>
Quitar la carpeta <em>{$installer_modified}</em> (o <em>install</em> si el instalador no le cambió el nombre automáticamente) desde su servidor.
</div>
</p>
";
