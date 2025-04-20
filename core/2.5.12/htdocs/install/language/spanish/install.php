<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Mostrar/ocultar texto de ayuda');
// Licencia
//define('LICENSE_NOT_WRITEABLE', 'El archivo de licencia "%s" NO es escribible!');
//define('LICENSE_IS_WRITEABLE', 'La licencia %s es escribible.');
// Página de verificación de configuración
define('SERVER_API', 'API del servidor');
define('PHP_EXTENSION', 'Extensión %s');
define('CHAR_ENCODING', 'Codificación de caracteres');
define('XML_PARSING', 'Análisis de XML');
define('REQUIREMENTS', 'Requisitos');
define('_PHP_VERSION', 'Versión de PHP');
define('RECOMMENDED_SETTINGS', 'Configuraciones recomendadas');
define('RECOMMENDED_EXTENSIONS', 'Extensiones recomendadas');
define('SETTING_NAME', 'Nombre de la configuración');
define('RECOMMENDED', 'Recomendado');
define('CURRENT', 'Actual');
define('RECOMMENDED_EXTENSIONS_MSG', 'Estas extensiones no son necesarias para el uso normal, pero pueden ser requeridas para explorar algunas funciones específicas (como el soporte multilingüe o RSS). Por lo tanto, se recomienda tenerlas instaladas.');
define('NONE', 'Ninguno');
define('SUCCESS', 'Éxito');
define('WARNING', 'Advertencia');
define('FAILED', 'Fallido');
// Títulos (principal y páginas)
define('XOOPS_INSTALL_WIZARD', 'Asistente de instalación de XOOPS');
define('LANGUAGE_SELECTION', 'Selección de idioma');
define('LANGUAGE_SELECTION_TITLE', 'Seleccione su idioma');
define('INTRODUCTION', 'Introducción');
define('INTRODUCTION_TITLE', 'Bienvenido al Asistente de instalación de XOOPS');
define('CONFIGURATION_CHECK', 'Verificación de configuración');
define('CONFIGURATION_CHECK_TITLE', 'Comprobando la configuración de su servidor');
define('PATHS_SETTINGS', 'Configuración de rutas');
define('PATHS_SETTINGS_TITLE', 'Configuración de rutas');
define('DATABASE_CONNECTION', 'Conexión a la base de datos');
define('DATABASE_CONNECTION_TITLE', 'Conexión a la base de datos');
define('DATABASE_CONFIG', 'Configuración de la base de datos');
define('DATABASE_CONFIG_TITLE', 'Configuración de la base de datos');
define('CONFIG_SAVE', 'Guardar configuración');
define('CONFIG_SAVE_TITLE', 'Guardando la configuración de su sistema');
define('TABLES_CREATION', 'Creación de tablas');
define('TABLES_CREATION_TITLE', 'Creación de tablas de la base de datos');
define('INITIAL_SETTINGS', 'Configuraciones iniciales');
define('INITIAL_SETTINGS_TITLE', 'Por favor, ingrese sus configuraciones iniciales');
define('DATA_INSERTION', 'Inserción de datos');
define('DATA_INSERTION_TITLE', 'Guardando sus configuraciones en la base de datos');
define('WELCOME', 'Bienvenido');
define('WELCOME_TITLE', 'Bienvenido a su sitio XOOPS');
// Configuraciones (etiquetas y texto de ayuda)
define('XOOPS_PATHS', 'Rutas físicas de XOOPS');
define('XOOPS_URLS', 'Ubicaciones web');
define('XOOPS_ROOT_PATH_LABEL', 'Ruta física del directorio raíz de documentos de XOOPS');
define('XOOPS_ROOT_PATH_HELP', 'Ruta física al directorio de documentos de XOOPS (servido) SIN barra final');
define('XOOPS_LIB_PATH_LABEL', 'Directorio de la biblioteca de XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Ruta física al directorio de la biblioteca de XOOPS SIN barra final, para compatibilidad futura. Ubique la carpeta fuera de ' . XOOPS_ROOT_PATH_LABEL . ' para mayor seguridad.');
define('XOOPS_DATA_PATH_LABEL', 'Directorio de archivos de datos de XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Ruta física al directorio de archivos de datos de XOOPS (escribible) SIN barra final, para compatibilidad futura. Ubique la carpeta fuera de ' . XOOPS_ROOT_PATH_LABEL . ' para mayor seguridad.');
define('XOOPS_URL_LABEL', 'Ubicación del sitio web (URL)');
define('XOOPS_URL_HELP', 'URL principal que se usará para acceder a su instalación de XOOPS');
define('LEGEND_CONNECTION', 'Conexión al servidor');
define('LEGEND_DATABASE', 'Base de datos');
define('DB_HOST_LABEL', 'Nombre del host del servidor');
define('DB_HOST_HELP', 'Nombre del host del servidor de la base de datos. Si no está seguro, <em>localhost</em> funciona en la mayoría de los casos');
define('DB_USER_LABEL', 'Nombre de usuario');
define('DB_USER_HELP', 'Nombre de la cuenta de usuario que se usará para conectar al servidor de la base de datos');
define('DB_PASS_LABEL', 'Contraseña');
define('DB_PASS_HELP', 'Contraseña de su cuenta de usuario de la base de datos');
define('DB_NAME_LABEL', 'Nombre de la base de datos');
define('DB_NAME_HELP', 'El nombre de la base de datos en el host. El instalador intentará crear la base de datos si no existe');
define('DB_CHARSET_LABEL', 'Conjunto de caracteres de la base de datos');
define('DB_CHARSET_HELP', 'MySQL incluye soporte para conjuntos de caracteres que le permite almacenar datos usando una variedad de conjuntos de caracteres y realizar comparaciones según varias colaciones.');
define('DB_COLLATION_LABEL', 'Colación de la base de datos');
define('DB_COLLATION_HELP', 'Una colación es un conjunto de reglas para comparar caracteres en un conjunto de caracteres.');
define('DB_PREFIX_LABEL', 'Prefijo de tabla');
define('DB_PREFIX_HELP', 'Este prefijo se añadirá a todas las tablas nuevas creadas para evitar conflictos de nombres en la base de datos. Si no está seguro, mantenga el valor predeterminado');
define('DB_PCONNECT_LABEL', 'Usar conexión persistente');
define('DB_PCONNECT_HELP', "El valor predeterminado es 'No'. Déjelo en blanco si no está seguro");
define('DB_DATABASE_LABEL', 'Base de datos');
define('LEGEND_ADMIN_ACCOUNT', 'Cuenta de administrador');
define('ADMIN_LOGIN_LABEL', 'Inicio de sesión del administrador');
define('ADMIN_EMAIL_LABEL', 'Correo electrónico del administrador');
define('ADMIN_PASS_LABEL', 'Contraseña del administrador');
define('ADMIN_CONFIRMPASS_LABEL', 'Confirmar contraseña');
// Botones
define('BUTTON_PREVIOUS', 'Anterior');
define('BUTTON_NEXT', 'Continuar');
// Mensajes
define('XOOPS_FOUND', '%s encontrado');
define('CHECKING_PERMISSIONS', 'Verificando permisos de archivos y directorios...');
define('IS_NOT_WRITABLE', '%s NO es escribible.');
define('IS_WRITABLE', '%s es escribible.');
define('XOOPS_PATH_FOUND', 'Ruta encontrada.');
//define('READY_CREATE_TABLES', 'No se detectaron tablas de XOOPS.<br>El instalador está listo para crear las tablas del sistema XOOPS.');
define('XOOPS_TABLES_FOUND', 'Las tablas del sistema XOOPS ya existen en su base de datos.');
define('XOOPS_TABLES_CREATED', 'Las tablas del sistema XOOPS han sido creadas.');
//define('READY_INSERT_DATA', 'El instalador está listo para insertar datos iniciales en su base de datos.');
//define('READY_SAVE_MAINFILE', 'El instalador está listo para guardar las configuraciones especificadas en <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Configuraciones guardadas');
define('SAVED_MAINFILE_MSG', 'El instalador ha guardado las configuraciones especificadas en <em>mainfile.php</em> y <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'Datos de XOOPS encontrados en la base de datos.');
define('DATA_INSERTED', 'Datos iniciales han sido insertados en la base de datos.');
// %s es el nombre de la base de datos
define('DATABASE_CREATED', '¡Base de datos %s creada!');
// %s es el nombre de la tabla
define('TABLE_NOT_CREATED', 'No se pudo crear la tabla %s');
define('TABLE_CREATED', 'Tabla %s creada.');
define('ROWS_INSERTED', '%d entradas insertadas en la tabla %s.');
define('ROWS_FAILED', 'Fallo al insertar %d entradas en la tabla %s.');
define('TABLE_ALTERED', 'Tabla %s actualizada.');
define('TABLE_NOT_ALTERED', 'Fallo al actualizar la tabla %s.');
define('TABLE_DROPPED', 'Tabla %s eliminada.');
define('TABLE_NOT_DROPPED', 'Fallo al eliminar la tabla %s.');
// Mensajes de error
define('ERR_COULD_NOT_ACCESS', 'No se pudo acceder a la carpeta especificada. Verifique que existe y que el servidor tiene permisos de lectura.');
define('ERR_NO_XOOPS_FOUND', 'No se encontró ninguna instalación de XOOPS en la carpeta especificada.');
define('ERR_INVALID_EMAIL', 'Correo electrónico inválido');
define('ERR_REQUIRED', 'Se requiere información.');
define('ERR_PASSWORD_MATCH', 'Las dos contraseñas no coinciden');
define('ERR_NEED_WRITE_ACCESS', 'El servidor debe tener acceso de escritura a los siguientes archivos y carpetas<br>(por ejemplo, <em>chmod 775 nombre_directorio</em> en un servidor UNIX/LINUX)<br>Si no están disponibles o no se crearon correctamente, créelos manualmente y establece los permisos adecuados.');
define('ERR_NO_DATABASE', 'No se pudo crear la base de datos. Contacte al administrador del servidor para obtener detalles.');
define('ERR_NO_DBCONNECTION', 'No se pudo conectar al servidor de la base de datos.');
define('ERR_WRITING_CONSTANT', 'Fallo al escribir la constante %s.');
define('ERR_COPY_MAINFILE', 'No se pudo copiar el archivo de distribución a %s');
define('ERR_WRITE_MAINFILE', 'No se pudo escribir en %s. Verifique los permisos del archivo e intente de nuevo.');
define('ERR_READ_MAINFILE', 'No se pudo abrir %s para lectura');
define('ERR_INVALID_DBCHARSET', "El conjunto de caracteres '%s' no es compatible.");
define('ERR_INVALID_DBCOLLATION', "La colación '%s' no es compatible.");
define('ERR_CHARSET_NOT_SET', 'El conjunto de caracteres predeterminado no está configurado para la base de datos de XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Soporte');
define('LOGIN', 'Autenticación');
define('LOGIN_TITLE', 'Autenticación');
define('USER_LOGIN', 'Inicio de sesión del administrador');
define('USERNAME', 'Nombre de usuario:');
define('PASSWORD', 'Contraseña:');
define('ICONV_CONVERSION', 'Conversión de conjunto de caracteres');
define('ZLIB_COMPRESSION', 'Compresión Zlib');
define('IMAGE_FUNCTIONS', 'Funciones de imagen');
define('IMAGE_METAS', 'Metadatos de imagen (exif)');
define('FILTER_FUNCTIONS', 'Funciones de filtrado');
define('ADMIN_EXIST', 'La cuenta de administrador ya existe.');
define('CONFIG_SITE', 'Configuración del sitio');
define('CONFIG_SITE_TITLE', 'Configuración del sitio');
define('MODULES', 'Instalación de módulos');
define('MODULES_TITLE', 'Instalación de módulos');
define('THEME', 'Seleccionar tema');
define('THEME_TITLE', 'Seleccionar el tema predeterminado');
define('INSTALLED_MODULES', 'Los siguientes módulos han sido instalados.');
define('NO_MODULES_FOUND', 'No se encontraron módulos.');
define('NO_INSTALLED_MODULES', 'No se instaló ningún módulo.');
define('THEME_NO_SCREENSHOT', 'No se encontró captura de pantalla');
define('IS_VALOR', ' => ');
// Mensajes de contraseña
define('PASSWORD_LABEL', 'Fuerza de la contraseña');
define('PASSWORD_DESC', 'No se ingresó contraseña');
define('PASSWORD_GENERATOR', 'Generador de contraseñas');
define('PASSWORD_GENERATE', 'Generar');
define('PASSWORD_COPY', 'Copiar');
define('PASSWORD_VERY_WEAK', 'Muy débil');
define('PASSWORD_WEAK', 'Débil');
define('PASSWORD_BETTER', 'Mejor');
define('PASSWORD_MEDIUM', 'Media');
define('PASSWORD_STRONG', 'Fuerte');
define('PASSWORD_STRONGEST', 'Muy fuerte');
// 2.5.7
define('WRITTEN_LICENSE', 'Clave de licencia de XOOPS %s escrita: <strong>%s</strong>');
// 2.5.8
define('CHMOD_CHGRP_REPEAT', 'Reintentar');
define('CHMOD_CHGRP_IGNORE', 'Usar de todos modos');
define('CHMOD_CHGRP_ERROR', 'El instalador no puede escribir el archivo de configuración %1$s.<p>PHP está escribiendo archivos bajo el usuario %2$s y el grupo %3$s.<p>El directorio %4$s/ tiene el usuario %5$s y el grupo %6$s');
// 2.5.9
define('CURL_HTTP', 'Biblioteca de URL del cliente (cURL)');
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Dominio de cookies para el sitio web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Dominio para establecer cookies. Puede estar en blanco, el host completo de la URL (www.ejemplo.com), o el dominio registrado sin subdominios (ejemplo.com) para compartir entre subdominios (www.ejemplo.com y blog.ejemplo.com).');
define('INTL_SUPPORT', 'Funciones de internacionalización');
define('XOOPS_SOURCE_CODE', 'XOOPS en GitHub');
define('XOOPS_INSTALLING', 'Instalando');
define('XOOPS_ERROR_ENCOUNTERED', 'Error');
define('XOOPS_ERROR_SEE_BELOW', 'Vea a continuación los mensajes.');
define('MODULES_AVAILABLE', 'Módulos disponibles');
define('INSTALL_THIS_MODULE', 'Agregar %s');
// 2.5.11
define('ERR_COPY_CONFIG_FILE', 'No se pudo copiar el archivo de configuración %s');
