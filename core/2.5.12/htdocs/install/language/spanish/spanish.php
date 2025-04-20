<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Tu sitio</h3>
<p>Ahora puedes acceder a la <a href='../index.php'>página principal de tu sitio</a>.</p>
<h3>Soporte</h3>
<p>Visita <a href='https://xoops.org/' rel='external'>El Proyecto XOOPS</a></p>
<p><strong>ATENCIÓN:</strong> Tu sitio actualmente contiene solo la funcionalidad mínima.
Por favor visita <a href='https://xoops.org/' rel='external' title='Sistema de Aplicaciones Web XOOPS'>xoops.org</a>
para aprender más sobre cómo extender XOOPS para mostrar páginas de texto, galerías de fotos, foros y más,
utilizando <em>módulos</em>, así como personalizar la apariencia de tu sitio con <em>temas</em>.</p>
";

$content .= "<h3>Configuración de seguridad</h3>
<p>El instalador intentará configurar tu sitio teniendo en cuenta la seguridad. Por favor, verifica lo siguiente:
<div class='confirmMsg'>
Que el archivo <em>mainfile.php</em> sea de solo lectura.<br>
Elimina la carpeta <em>{$installer_modified}</em> (o <em>install</em> si no fue renombrada automáticamente por el instalador) de tu servidor.
</div>
</p>
";
