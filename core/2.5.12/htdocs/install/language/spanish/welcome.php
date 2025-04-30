<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> es un sistema de publicación web de código abierto orientado a objetos, escrito en PHP. Es una herramienta ideal para desarrollar sitios web comunitarios dinámicos de pequeño a gran tamaño, portales internos de empresas, portales corporativos, weblogs y mucho más.
</p>
<p>
    XOOPS se distribuye bajo los términos de la
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">Licencia Pública General de GNU (GPL)</a>
    versión 2 o superior, y es gratuito para usar y modificar.
    Puede redistribuirse libremente siempre que se cumplan los términos de distribución de la GPL.
</p>
<h3>Requisitos</h3>
<ul>
    <li>Servidor WWW (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 7.4 o superior, se recomienda 7.3 o superior</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 o superior, se recomienda 5.7 o superior</li>
</ul>
<h3>Antes de instalar</h3>
<ol>
    <li>Configure correctamente el servidor WWW, PHP y el servidor de base de datos.</li>
    <li>Prepare una base de datos para su sitio XOOPS.</li>
    <li>Prepare una cuenta de usuario y otorgue a ese usuario acceso a la base de datos.</li>
    <li>Haga que estos directorios y archivos sean escribibles: %s</li>
    <li>Por motivos de seguridad, se recomienda encarecidamente mover los dos directorios mencionados a continuación fuera del <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">document root</a> y cambiar los nombres de las carpetas: %s</li>
    <li>Cree (si aún no existen) y haga escribibles estos directorios: %s</li>
    <li>Active las cookies y JavaScript en su navegador.</li>
</ol>
<h3>Notas especiales</h3>
<p>Algunas combinaciones específicas de software del sistema pueden requerir configuraciones adicionales para funcionar con XOOPS. Si alguno de estos temas aplica a su entorno, consulte el manual completo de instalación de XOOPS en
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">Manual de instalación de XOOPS</a> para obtener más información.
</p>
<p>MySQL 8.0 no es compatible con todas las versiones de PHP. Incluso en las versiones compatibles, problemas con la biblioteca <em>mysqlnd</em> de PHP pueden requerir que el <em>default-authentication-plugin</em> del servidor MySQL se configure en <em>mysql_native_password</em> para que funcione correctamente.
</p>
<p>Los sistemas con SELinux habilitado (como CentOS y RHEL) pueden requerir cambios en el contexto de seguridad para los directorios de XOOPS, además de los permisos de archivo normales, para hacer que los directorios sean escribibles. Consulte la documentación de su sistema y/o al administrador del sistema.
</p>
';

return $content;

