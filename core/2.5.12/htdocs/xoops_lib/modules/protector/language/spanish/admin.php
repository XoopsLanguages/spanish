<?php
// mymenu
// no cambiar
define('_AM_DBUPDATED', _AM_SYSTEM_DBUPDATED);
// Navegación
define('_MD_A_MYMENU_MYTPLSADMIN', '');
define('_MD_A_MYMENU_MYBLOCKSADMIN', 'Permisos');
define('_MD_A_MYMENU_MYPREFERENCES', 'Preferencias');
// index.php
define('_AM_TH_DATETIME', 'Fecha y hora');
define('_AM_TH_USER', 'Usuario');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENTE');
define('_AM_TH_TYPE', 'Tipo');
define('_AM_TH_DESCRIPTION', 'Descripción');
define('_AM_TH_BADIPS', 'IPs no permitidas<br><br><span style="font-weight:normal;">Escribe cada IP en una línea<br>en blanco significa que todas las IPs están permitidas</span>');
define('_AM_TH_GROUP1IPS', 'IPs permitidas para el Grupo=1<br><br><span style="font-weight:normal;">Escribe cada IP en una línea.<br>192.168. significa 192.168.*<br>en blanco significa que todas las IPs están permitidas</span>');
define('_AM_LABEL_COMPACTLOG', 'Registro compacto');
define('_AM_BUTTON_COMPACTLOG', '¡Compactar!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Los registros duplicados (IP, Tipo) serán eliminados');
define('_AM_LABEL_REMOVEALL', 'Eliminar todos los registros');
define('_AM_BUTTON_REMOVEALL', '¡Eliminar todo!');
define('_AM_JS_REMOVEALLCONFIRM', 'Todos los registros serán eliminados por completo. ¿Estás seguro?');
define('_AM_LABEL_REMOVE', 'Eliminar los registros marcados:');
define('_AM_BUTTON_REMOVE', '¡Eliminar!');
define('_AM_JS_REMOVECONFIRM', '¿Eliminar está bien?');
define('_AM_MSG_IPFILESUPDATED', 'Los archivos para IPs han sido actualizados');
define('_AM_MSG_BADIPSCANTOPEN', 'No se pudo abrir el archivo para IPs no permitidas');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'No se pudo abrir el archivo para permitir el grupo=1');
define('_AM_MSG_REMOVED', 'Los registros han sido eliminados');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Haz que el directorio de configuraciones sea escribible: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Gestor de prefijos');
define('_AM_MSG_DBUPDATED', '¡Base de datos actualizada exitosamente!');
define('_AM_CONFIRM_DELETE', 'Todos los datos serán eliminados. ¿Está bien?');
define('_AM_TXT_HOWTOCHANGEDB', "Si deseas cambiar el prefijo,<br> edita %s/data/secure.php manualmente.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'No seguro');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Si puedes ver una imagen -NG- o el enlace devuelve una página normal, tu XOOPS_TRUST_PATH no está colocado correctamente. El mejor lugar para XOOPS_TRUST_PATH es fuera del DocumentRoot. Si no puedes hacerlo, debes colocar un archivo .htaccess (DENY FROM ALL) justo debajo de XOOPS_TRUST_PATH como segunda mejor opción.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Verifica que los archivos PHP dentro de TRUST_PATH estén configurados como solo lectura (debe mostrar un error 404, 403 o 500)');
define('_AM_ADV_REGISTERGLOBALS', "Si está 'ACTIVADO', esta configuración facilita varios ataques de inyección. Si puedes, configura 'register_globals off' en php.ini, o si no es posible, crea o edita .htaccess en tu directorio XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN', "Si está 'ACTIVADO', esta configuración permite a los atacantes ejecutar scripts arbitrarios en servidores remotos.<br>Solo los administradores pueden cambiar esta opción.<br>Si eres administrador, edita php.ini o httpd.conf.<br><b>Ejemplo de httpd.conf:<br>   php_admin_flag   allow_url_fopen   off</b><br>De lo contrario, reclámalo a tus administradores.");
define('_AM_ADV_USETRANSSID', "Si está 'ACTIVADO', tu ID de sesión se mostrará en etiquetas de anclaje, etc.<br>Para prevenir el secuestro de sesiones, agrega una línea en .htaccess en XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX', "Esta configuración facilita 'Inyecciones SQL'.<br>No olvides activar 'Forzar sanitización *' en las preferencias de este módulo.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Ir al gestor de prefijos');
define('_AM_ADV_MAINUNPATCHED', 'Debes editar tu mainfile.php como se indica en el README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Tu databasefactory está listo para la protección contra inyecciones SQL con DBLayer Trapping');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Tu databasefactory no está listo para la protección contra inyecciones SQL con DBLayer Trapping. Se requieren algunos parches.');
define('_AM_ADV_SUBTITLECHECK', 'Verifica si Protector funciona correctamente');
define('_AM_ADV_CHECKCONTAMI', 'Contaminación');
define('_AM_ADV_CHECKISOCOM', 'Comentarios aislados');
// XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'y coloca la siguiente línea en él:');
// XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefijo');
define('_AM_PROTECTOR_TABLES', 'Tablas');
define('_AM_PROTECTOR_UPDATED', 'Actualizado');
define('_AM_PROTECTOR_COPY', 'Copiar');
define('_AM_PROTECTOR_ACTIONS', 'Acciones');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Bloquear las IPs en los registros marcados:');
define('_AM_BUTTON_BAN_BY_IP', '¡Bloquear IP!');
define('_AM_JS_BANCONFIRM', '¿Bloqueo de IPs está bien?');
define('_AM_MSG_BANNEDIP', 'Las IPs han sido bloqueadas');
define('_AM_ADMINSTATS_TITLE', 'Resumen del registro de Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Último mes');
define('_AM_ADMINSTATS_LAST_WEEK', 'Última semana');
define('_AM_ADMINSTATS_LAST_DAY', 'Último día');
define('_AM_ADMINSTATS_LAST_HOUR', 'Última hora');
