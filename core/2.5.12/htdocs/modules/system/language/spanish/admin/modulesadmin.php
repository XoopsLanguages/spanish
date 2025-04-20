<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// Navigation
define('_AM_SYSTEM_MODULES_ADMIN', 'Administración de Módulos de XOOPS');
define('_AM_SYSTEM_MODULES_LIST', 'Lista de Módulos');
define('_AM_SYSTEM_MODULES_TOINSTALL', 'Instalar módulo');
define('_AM_SYSTEM_MODULES_VALIDATE', 'Validar cambios');
define('_AM_SYSTEM_MODULES_SUBMITRES', 'Enviar Resultado');
// Messages
define('_AM_SYSTEM_MODULES_RUSUREINS', 'Presione el botón de abajo para instalar este módulo');
define('_AM_SYSTEM_MODULES_RUSUREUNINS', '¿Está seguro de que desea desinstalar este módulo?');
define('_AM_SYSTEM_MODULES_RUSUREUPD', 'Presione el botón de abajo para actualizar este módulo');
define('_AM_SYSTEM_MODULES_BTOMADMIN', 'Administración de Módulos de XOOPS');
define('_AM_SYSTEM_MODULES_INSTALLING', 'Instalando ');
define('_AM_SYSTEM_MODULES_DEACTIVATE', 'Desactivar ');
define('_AM_SYSTEM_MODULES_ACTIVATE', 'Activar ');
define('_AM_SYSTEM_MODULES_UPDATING', 'Actualizando ');
// Main
define('_AM_SYSTEM_MODULES_INSTALL', 'Instalar');
define('_AM_SYSTEM_MODULES_UNINSTALL', 'Desinstalar');
define('_AM_SYSTEM_MODULES_UPDATE', 'Actualizar');
define('_AM_SYSTEM_MODULES_VIEWLARGE', 'Vista Amplia');
define('_AM_SYSTEM_MODULES_VIEWLINE', 'Vista de Línea');
// %s represents module name
define('_AM_SYSTEM_MODULES_FAILINS', 'No se puede instalar %s.');
define('_AM_SYSTEM_MODULES_FAILACT', 'No se puede activar %s.');
define('_AM_SYSTEM_MODULES_FAILDEACT', 'No se puede desactivar %s.');
define('_AM_SYSTEM_MODULES_FAILUPD', 'No se puede actualizar %s.');
define('_AM_SYSTEM_MODULES_FAILUNINS', 'No se puede desinstalar %s.');
define('_AM_SYSTEM_MODULES_FAILORDER', 'No se puede reordenar %s.');
define('_AM_SYSTEM_MODULES_FAILWRITE', 'No se puede escribir en el menú principal.');
define('_AM_SYSTEM_MODULES_ALEXISTS', 'El módulo %s ya existe.');
define('_AM_SYSTEM_MODULES_ERRORSC', 'Error(es):');
define('_AM_SYSTEM_MODULES_OKINS', 'Módulo %s instalado correctamente.');
define('_AM_SYSTEM_MODULES_OKACT', 'Módulo %s activado correctamente.');
define('_AM_SYSTEM_MODULES_OKDEACT', 'Módulo %s desactivado correctamente.');
define('_AM_SYSTEM_MODULES_OKUPD', 'Módulo %s actualizado correctamente.');
define('_AM_SYSTEM_MODULES_OKUNINS', 'Módulo %s desinstalado correctamente.');
define('_AM_SYSTEM_MODULES_OKORDER', 'Módulo %s cambiado correctamente.');
define('_AM_SYSTEM_MODULES_MODULE', 'Módulo');
define('_AM_SYSTEM_MODULES_VERSION', 'Versión');
define('_AM_SYSTEM_MODULES_LASTUP', 'Última Actualización');
define('_AM_SYSTEM_MODULES_DEACTIVATED', 'Desactivado');
define('_AM_SYSTEM_MODULES_ACTION', 'Acción');
define('_AM_SYSTEM_MODULES_MENU', 'Menú');
define('_AM_SYSTEM_MODULES_HIDE', 'Ocultar');
define('_AM_SYSTEM_MODULES_SHOW', 'Mostrar');
define('_AM_SYSTEM_MODULES_DUPEN', '¡Entrada duplicada en la tabla de módulos!');
define('_AM_SYSTEM_MODULES_DEACTED', 'El módulo seleccionado ha sido desactivado. Ahora puede desinstalar el módulo de forma segura.');
define('_AM_SYSTEM_MODULES_ACTED', '¡El módulo seleccionado ha sido activado!');
define('_AM_SYSTEM_MODULES_UPDTED', '¡El módulo seleccionado ha sido actualizado!');
define('_AM_SYSTEM_MODULES_SYSNO', 'El módulo del sistema no se puede desactivar.');
define('_AM_SYSTEM_MODULES_STRTNO', 'Este módulo está configurado como su página de inicio predeterminada. Por favor, cambie el módulo de inicio a lo que se adapte a sus preferencias.');
define('_AM_SYSTEM_MODULES_ORDER', 'Orden');
define('_AM_SYSTEM_MODULES_ORDER0', '(0 = ocultar)');
define('_AM_SYSTEM_MODULES_ACTIVE', 'Activo');
define('_AM_SYSTEM_MODULES_INACTIVE', 'Inactivo');
define('_AM_SYSTEM_MODULES_NOTINSTALLED', 'No Instalado');
define('_AM_SYSTEM_MODULES_NOCHANGE', 'Sin Cambios');
define('_AM_SYSTEM_MODULES_SUBMIT', 'Enviar');
define('_AM_SYSTEM_MODULES_CANCEL', 'Cancelar');
define('_AM_SYSTEM_MODULES_DBUPDATE', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_MODULES_LISTUPBLKS', 'Los siguientes bloques serán actualizados.<br>Seleccione los bloques cuyo contenido (plantilla y opciones) puede ser sobrescrito.<br>');
define('_AM_SYSTEM_MODULES_NEWBLKS', 'Nuevos Bloques');
define('_AM_SYSTEM_MODULES_DEPREBLKS', 'Bloques Obsoletos');
// Logger
define('_AM_SYSTEM_MODULES_TABLE_RESERVED', '¡%s es una tabla reservada!');
define('_AM_SYSTEM_MODULES_CREATE_TABLES', 'Creando tablas...');
define('_AM_SYSTEM_MODULES_TABLE_CREATED', 'Tabla %s creada');
define('_AM_SYSTEM_MODULES_INSERT_DATA', '&nbsp;&nbsp; Datos insertados en la tabla %s');
define('_AM_SYSTEM_MODULES_INSERT_DATA_FAILD', 'No se pudo insertar %s en la base de datos.');
define('_AM_SYSTEM_MODULES_INSERT_DATA_DONE', 'Datos del módulo insertados correctamente.');
define('_AM_SYSTEM_MODULES_MODULEID', ' ID del Módulo: %s');
define('_AM_SYSTEM_MODULES_SQL_FOUND', 'Archivo SQL encontrado en %s ');
define('_AM_SYSTEM_MODULES_SQL_NOT_FOUND', 'Archivo SQL no encontrado en %s');
define('_AM_SYSTEM_MODULES_SQL_NOT_CREATE', 'ERROR: No se pudo crear %s ');
define('_AM_SYSTEM_MODULES_SQL_NOT_VALID', '¡%s no es un SQL válido!');
define('_AM_SYSTEM_MODULES_GROUP_ID', ' ID del Grupo: %s ');
define('_AM_SYSTEM_MODULES_NAME', ' Nombre: ');
define('_AM_SYSTEM_MODULES_VALUE', ' Valor: ');
// Templates
define('_AM_SYSTEM_MODULES_TEMPLATES_ADD', 'Añadiendo plantillas...');
define('_AM_SYSTEM_MODULES_TEMPLATES_DELETE', 'Eliminando plantillas...');
define('_AM_SYSTEM_MODULES_TEMPLATES_UPDATE', 'Actualizando plantillas...');
define('_AM_SYSTEM_MODULES_TEMPLATE_ID', 'ID de la Plantilla: %s ');
define('_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA', 'Plantilla %s añadida a la base de datos');
define('_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR', 'ERROR: No se pudo insertar la plantilla %s en la base de datos.');
define('_AM_SYSTEM_MODULES_TEMPLATE_COMPILED', 'Plantilla %s compilada ');
define('_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED', 'ERROR: Error al compilar la plantilla %s ');
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA', 'Plantilla %s eliminada de la base de datos. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD', 'ERROR: No se pudo eliminar la plantilla %s de la base de datos. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA', 'Plantilla %s insertada en la base de datos. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE', 'Plantilla %s recompilada');
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD', 'ERROR: Error al recompilar la plantilla %s');
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR', 'ERROR: No se pudo recompilar la plantilla %s ');
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR', 'ERROR: No se pudo eliminar la plantilla antigua %s. Abortando la actualización de este archivo. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_UPDATE', 'Plantilla %s actualizada. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR', 'ERROR: No se pudo actualizar la plantilla %s. ');
// Blocks
define('_AM_SYSTEM_MODULES_BLOCKS_ADD', 'Añadiendo bloques...');
define('_AM_SYSTEM_MODULES_BLOCKS_DELETE', 'Eliminando bloque...');
define('_AM_SYSTEM_MODULES_BLOCKS_REBUILD', 'Reconstruyendo bloques...');
define('_AM_SYSTEM_MODULES_BLOCK_ID', ' ID del Bloque: %s ');
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS', 'Derecho de acceso al bloque añadido');
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR', 'ERROR: No se pudo añadir el derecho de acceso al bloque');
define('_AM_SYSTEM_MODULES_BLOCK_ADD', 'Bloque %s añadido ');
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR', 'ERROR: No se pudo añadir el bloque %s a la base de datos! ');
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE', 'Error de la base de datos: %s ');
define('_AM_SYSTEM_MODULES_BLOCK_CREATED', 'Bloque %s creado ');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE', 'Bloque %s eliminado. ');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA', 'Plantilla del bloque %s eliminada de la base de datos. ');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR', 'ERROR: No se pudo eliminar el bloque %s');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR', 'ERROR: No se pudo eliminar la plantilla del bloque %s de la base de datos');
define('_AM_SYSTEM_MODULES_BLOCK_DEPRECATED', 'Plantilla del bloque %s obsoleta ');
define('_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR', 'ERROR: No se pudo eliminar la plantilla del bloque obsoleto.  ');
define('_AM_SYSTEM_MODULES_BLOCK_UPDATE', 'Bloque %s actualizado. ');
// Configs
define('_AM_SYSTEM_MODULES_GONFIG_ID', 'ID de la Configuración: %s');
define('_AM_SYSTEM_MODULES_MODULE_DATA_ADD', 'Añadiendo datos de configuración del módulo...');
define('_AM_SYSTEM_MODULES_MODULE_DATA_DELETE', 'Eliminando opciones de configuración del módulo...');
define('_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE', 'Datos del módulo actualizados.');
define('_AM_SYSTEM_MODULES_CONFIG_ADD', ' Opción de configuración añadida');
define('_AM_SYSTEM_MODULES_CONFIG_DATA_ADD', ' Configuración %s añadida a la base de datos');
define('_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR', ' ERROR: No se pudo insertar la configuración %s en la base de datos. ');
define('_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE', 'Datos de la configuración eliminados de la base de datos. ');
define('_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR', 'ERROR: No se pudieron eliminar los datos de la configuración de la base de datos');
// Access
define('_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD', 'Estableciendo los derechos del grupo...');
define('_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR', 'ERROR: No se pudieron eliminar los permisos del grupo ');
define('_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED', 'Permisos del grupo eliminados ');
define('_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD', 'Derecho de acceso de administrador añadido para el ID del Grupo %s');
define('_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR', 'ERROR: No se pudo añadir el derecho de acceso de administrador para el ID del Grupo %s');
define('_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR', 'Derecho de acceso de usuario añadido para el ID del Grupo: %s');
define('_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR', 'ERROR: No se pudo añadir el derecho de acceso de usuario para el ID del Grupo: %s');
// execute module specific install script if any
define('_AM_SYSTEM_MODULES_FAILED_EXECUTE', 'Error al ejecutar %s');
define('_AM_SYSTEM_MODULES_FAILED_SUCESS', '%s ejecutado correctamente.');
define('_AM_SYSTEM_MODULES_DELETE_ERROR', 'ERROR: No se pudo eliminar %s');
define('_AM_SYSTEM_MODULES_UPDATE_ERROR', 'ERROR: No se pudo actualizar %s');
define('_AM_SYSTEM_MODULES_DELETE_MOD_TABLES', 'Eliminando tablas del módulo...');
define('_AM_SYSTEM_MODULES_COMMENTS_DELETE', 'Eliminando comentarios...');
define('_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR', 'ERROR: No se pudieron eliminar los comentarios');
define('_AM_SYSTEM_MODULES_COMMENTS_DELETED', 'Comentarios eliminados');
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE', 'Eliminando notificaciones...');
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR', 'ERROR: No se pudieron eliminar las notificaciones');
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED', 'Notificaciones eliminadas');
define('_AM_SYSTEM_MODULES_TABLE_DROPPED', '¡Tabla %s eliminada!');
define('_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR', 'ERROR: No se pudo eliminar la tabla %s');
define('_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED', 'ERROR: ¡No está permitido eliminar la tabla %s !');
// Tips
define('_AM_SYSTEM_MODULES_TIPS', '<ul>
<li>Si instala un nuevo módulo, ¡recuerde configurar las preferencias del módulo, los bloques y los permisos de los usuarios!</li>
<li>Para ocultar el módulo en el bloque del Menú Principal, establezca el orden en 0</li>
<li>Elimine los archivos de módulo no utilizados de su servidor para evitar problemas de seguridad y mantener su sitio web seguro.</li>
<li>Para cambiar el orden de los módulos (que se reflejará en el Menú), solo necesita arrastrar y soltar los módulos en la ubicación deseada.</li>
</ul>');
define('_AM_SYSTEM_MODULES_CONFIRM_TIPS', '<ul>
<li>Compruebe todas las modificaciones para validarlas.</li>
</ul>');
// 2.5.7
define('_AM_SYSTEM_MODULES_INSTALL_TESTDATA', 'Añadir Datos de Prueba');
// 2.5.8
define('_AM_SYSTEM_MODULES_INSTALL_MORE', 'Instalar más módulos');
// 2.5.11
define('_AM_SYSTEM_MODULES_INSTALL_THISMODULE', 'Administración de este Módulo');
