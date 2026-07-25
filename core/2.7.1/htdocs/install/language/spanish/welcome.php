<?php
//
// _LANGCODE: es
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> es de código abierto
    Sistema de publicación web orientado a objetos escrito en PHP. Es una herramienta ideal para
    desarrollando sitios web comunitarios dinámicos de pequeños a grandes, portales intraempresariales, portales corporativos, blogs y mucho más.
</p>
<p>
    XOOPS se libera bajo los términos del
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Licencia pública general (GPL)</a>
    versión 2 o superior, y su uso y modificación es gratuito.
    La redistribución es gratuita siempre que cumpla con los términos de distribución del GPL.
</p>
<h3>Requisitos</h3>
<ul>
    <li>WWW Servidor (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 o superior, se recomienda 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 o superior, se recomienda 8.4.5+ </li>
</ul>
<h3>Antes de ti install</h3>
<ol>
    <li>Configure el servidor WWW, PHP y el servidor de base de datos correctamente.</li>
    <li>Prepare una base de datos para su sitio XOOPS.</li>
    <li>Prepare la cuenta de usuario y otorgue al usuario acceso a la base de datos.</li>
    <li>Haga que estos directorios y archivos sean escribibles: %s</li>
    <li>Por consideraciones de seguridad, se recomienda encarecidamente mover los dos directorios siguientes fuera de <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">raíz del documento</a> y cambiar los nombres de las carpetas: %s</li>
    <li>Cree (si aún no está presente) y haga que se pueda escribir en estos directorios: %s</li>
    <li>Active las cookies y JavaScript de su navegador.</li>
</ol>
<h3>Notas especiales</h3>
<ol>
    <li>Algunas combinaciones específicas de software del sistema pueden requerir algunas configuraciones adicionales para funcionar.
    con XOOPS. Si alguno de estos temas se aplica a su entorno, consulte la información completa.
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    manual de instalación</a> para más información.<br><br>

    <li><strong>SELinux</strong> sistemas habilitados (como <strong>CentOS</strong>  y <strong>RHEL</strong>) puede requerir cambios en el contexto de seguridad
    para directorios XOOPS además de los permisos de archivos normales para que se pueda escribir en los directorios.
    Consulte la documentación de su sistema y/o al administrador de sistemas.
</ol>
';

return $content;

