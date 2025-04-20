<?php
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Rutas físicas de XOOPS');
define('LEGEND_DATABASE', 'Conjunto de caracteres de la base de datos');

define('XOOPS_LIB_PATH_LABEL', 'Directorio de la biblioteca XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Ruta física al directorio de la biblioteca XOOPS SIN barra diagonal al final, para compatibilidad futura. Ubique la carpeta fuera de ' . XOOPS_ROOT_PATH . ' para que sea segura.');
define('XOOPS_DATA_PATH_LABEL', 'Directorio de archivos de datos de XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Ruta física al directorio de archivos de datos de XOOPS (grabable) SIN barra diagonal al final, para compatibilidad futura. Ubique la carpeta fuera de ' . XOOPS_ROOT_PATH . ' para que sea segura.');

define('DB_COLLATION_LABEL', 'Conjunto de caracteres y cotejamiento de la base de datos');
define('DB_COLLATION_HELP', "A partir de la versión 4.12, MySQL admite un conjunto de caracteres y cotejamiento personalizados. Sin embargo, es más complejo de lo esperado, así que NO realice ningún cambio a menos que esté seguro de su elección.");
define('DB_COLLATION_NOCHANGE', 'No cambiar');

define('XOOPS_PATH_FOUND', 'Ruta encontrada.');
define('ERR_COULD_NOT_ACCESS', 'No se pudo acceder a la carpeta especificada. Verifique que exista y que el servidor pueda leerla.');
define('CHECKING_PERMISSIONS', 'Comprobando los permisos de archivos y directorios...');
define('ERR_NEED_WRITE_ACCESS', 'Se debe otorgar acceso de escritura al servidor a los siguientes archivos y carpeta<br>(es decir, <em>chmod 777 nombre_directorio</em> en un servidor UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NO tiene permiso de escritura.');
define('IS_WRITABLE', '%s tiene permiso de escritura.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Error al escribir contenido en mainfile.php, escriba el contenido en mainfile.php manualmente.');
