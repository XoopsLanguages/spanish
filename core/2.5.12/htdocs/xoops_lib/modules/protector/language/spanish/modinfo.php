<?php
if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // The name of this module
    define($constpref . '_NAME', 'Protector');

    // A brief description of this module
    define($constpref . '_DESC', 'Este módulo protege su sitio XOOPS de varios ataques como DoS, inyección SQL y contaminación de variables.');

    // Menu
    define($constpref . '_ADMININDEX', 'Centro de Protector');
    define($constpref . '_ADVISORY', 'Asesoramiento de Seguridad');
    define($constpref . '_PREFIXMANAGER', 'Administrador de Prefijos');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'Permisos');

    // Configs
    define($constpref . '_GLOBAL_DISBL', 'Desactivado temporalmente');
    define($constpref . '_GLOBAL_DISBLDSC', 'Todas las protecciones están desactivadas temporalmente.<br>No olvide desactivar esto después de solucionar el problema');

    define($constpref . '_DEFAULT_LANG', 'Idioma predeterminado');
    define($constpref . '_DEFAULT_LANGDSC', 'Especifique el conjunto de idiomas para mostrar los mensajes antes de procesar common.php');

    define($constpref . '_RELIABLE_IPS', 'IPs confiables');
    define($constpref . '_RELIABLE_IPSDSC', 'establezca las IP en las que puede confiar separadas con | . ^ coincide con el inicio de la cadena, $ coincide con el final de la cadena.');

    define($constpref . '_LOG_LEVEL', 'Nivel de registro');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'Tiempo de suspensión de IP baneada (seg)');

    define($constpref . '_LOGLEVEL0', 'ninguno');
    define($constpref . '_LOGLEVEL15', 'Silencioso');
    define($constpref . '_LOGLEVEL63', 'silencioso');
    define($constpref . '_LOGLEVEL255', 'completo');

    define($constpref . '_HIJACK_TOPBIT', 'Bits de IP protegidos para la sesión');
    define($constpref . '_HIJACK_TOPBITDSC', 'Anti Secuestro de Sesión:<br>Predeterminado 24/56 (máscara de red para IPV4/IPV6). (Todos los bits están protegidos)<br>Cuando su IP no es estable, establezca el rango de IP por número de bits.<br>(ej) Si su IP puede moverse en el rango de 192.168.0.0-192.168.0.255, establezca 24(bit) aquí');
    define($constpref . '_HIJACK_DENYGP', 'Grupos a los que no se les permite mover la IP en una sesión');
    define($constpref . '_HIJACK_DENYGPDSC', 'Anti Secuestro de Sesión:<br>Seleccione los grupos a los que no se les permite mover su IP en una sesión.<br>(Recomiendo activar Administrador.)');
    define($constpref . '_SAN_NULLBYTE', 'Sanitizar bytes nulos');
    define($constpref . '_SAN_NULLBYTEDSC', 'El carácter de terminación "\\0" se usa a menudo en ataques maliciosos.<br>un byte nulo se cambiará a un espacio.<br>(muy recomendado como Activado)');
    define($constpref . '_DIE_NULLBYTE', 'Salir si se encuentran bytes nulos');
    define($constpref . '_DIE_NULLBYTEDSC', 'El carácter de terminación "\\0" se usa a menudo en ataques maliciosos.<br>(muy recomendado como Activado)');
    define($constpref . '_DIE_BADEXT', 'Salir si se cargan archivos incorrectos');
    define($constpref . '_DIE_BADEXTDSC', 'Si alguien intenta cargar archivos que tienen extensiones incorrectas como .php, este módulo sale de su XOOPS.<br>Si a menudo adjunta archivos php en B-Wiki o PukiWikiMod, desactive esto.');
    define($constpref . '_CONTAMI_ACTION', 'Acción si se encuentra una contaminación');
    define($constpref . '_CONTAMI_ACTIONDS', 'Seleccione la acción cuando alguien intente contaminar las variables globales del sistema en su XOOPS.<br>(la opción recomendada es pantalla en blanco)');
    define($constpref . '_ISOCOM_ACTION', 'Acción si se encuentra un comentario aislado');
    define($constpref . '_ISOCOM_ACTIONDSC', 'Anti Inyección SQL:<br>Seleccione la acción cuando se encuentre un "/*" aislado.<br>"Sanitizar" significa agregar otro "*/" al final.<br>(la opción recomendada es Sanitizar)');
    define($constpref . '_UNION_ACTION', 'Acción si se encuentra una UNION');
    define($constpref . '_UNION_ACTIONDSC', 'Anti Inyección SQL:<br>Seleccione la acción cuando haya alguna sintaxis como UNION de SQL.<br>"Sanitizar" significa cambiar "union" a "uni-on".<br>(la opción recomendada es Sanitizar)');
    define($constpref . '_ID_INTVAL', 'Forzar intval a variables como id');
    define($constpref . '_ID_INTVALDSC', 'Todas las solicitudes denominadas "*id" se tratarán como enteros.<br>Esta opción lo protege de algún tipo de XSS e Inyecciones SQL.<br>Aunque recomiendo activar esta opción, puede causar problemas con algunos módulos.');
    define($constpref . '_FILE_DOTDOT', 'Protección contra los recorridos de directorios');
    define($constpref . '_FILE_DOTDOTDSC', 'Elimina ".." de todas las solicitudes que parecen recorridos de directorios');

    define($constpref . '_BF_COUNT', 'Anti Fuerza Bruta');
    define($constpref . '_BF_COUNTDSC', 'Establezca el número máximo de veces que un invitado puede intentar iniciar sesión en 10 minutos. Si los intentos fallidos de inicio de sesión superan esto, la dirección IP del invitado será baneada.');

    define($constpref . '_BWLIMIT_COUNT', 'Limitación de ancho de banda');
    define($constpref . '_BWLIMIT_COUNTDSC', 'Especifique el acceso máximo a mainfile.php durante el tiempo de observación. Este valor debe ser 0 para entornos normales que tienen suficiente ancho de banda de CPU. Se ignorará el número inferior a 10.');

    define($constpref . '_DOS_SKIPMODS', 'Módulos fuera del verificador DoS/Crawler');
    define($constpref . '_DOS_SKIPMODSDSC', 'establezca los nombres de directorio de los módulos separados con |. Esta opción será útil con el módulo de chat, etc.');

    define($constpref . '_DOS_EXPIRE', 'Tiempo de observación para cargas altas (seg)');
    define($constpref . '_DOS_EXPIREDSC', 'Este valor especifica el tiempo de observación para la recarga de alta frecuencia (ataque F5) y los rastreadores de alta carga.');

    define($constpref . '_DOS_F5COUNT', 'Recuentos incorrectos para el ataque F5');
    define($constpref . '_DOS_F5COUNTDSC', 'Prevención de ataques DoS.<br>Este valor especifica los recuentos de recarga que se considerarán como un ataque malicioso.');
    define($constpref . '_DOS_F5ACTION', 'Acción contra el ataque F5');

    define($constpref . '_DOS_CRCOUNT', 'Recuentos incorrectos para rastreadores');
    define($constpref . '_DOS_CRCOUNTDSC', 'Prevención de rastreadores de alta carga.<br>Este valor especifica los recuentos de acceso que se considerarán como un rastreador de mala educación.');
    define($constpref . '_DOS_CRACTION', 'Acción contra rastreadores de alta carga');

    define($constpref . '_DOS_CRSAFE', 'User-Agent bienvenido');
    define($constpref . '_DOS_CRSAFEDSC', 'Un patrón regex de Perl para User-Agent.<br>Si coincide, el rastreador nunca se considera un rastreador de alta carga.<br>ej) /(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'Ninguno (solo registro)');
    define($constpref . '_OPT_SAN', 'Sanitizar');
    define($constpref . '_OPT_EXIT', 'Pantalla en blanco');
    define($constpref . '_OPT_BIP', 'Banear la IP (Sin límite)');
    define($constpref . '_OPT_BIPTIME0', 'Banear la IP (moratoria)');

    define($constpref . '_DOSOPT_NONE', 'Ninguno (solo registro)');
    define($constpref . '_DOSOPT_SLEEP', 'Dormir');
    define($constpref . '_DOSOPT_EXIT', 'Pantalla en blanco');
    define($constpref . '_DOSOPT_BIP', 'Banear la IP (Sin límite)');
    define($constpref . '_DOSOPT_BIPTIME0', 'Banear la IP (moratoria)');
    define($constpref . '_DOSOPT_HTA', 'DENEGAR por .htaccess (Experimental)');

    define($constpref . '_BIP_EXCEPT', 'Grupos nunca registrados como IP incorrecta');
    define($constpref . '_BIP_EXCEPTDSC', 'Un usuario que pertenece al grupo especificado aquí nunca será baneado.<br>(Recomiendo activar Administrador.)');

    define($constpref . '_DISABLES', 'Desactivar funciones peligrosas en XOOPS');

    define($constpref . '_DBLAYERTRAP', 'Habilitar la captura de la capa DB anti-inyección SQL');
    define($constpref . '_DBLAYERTRAPDSC', 'Casi todos los ataques de inyección SQL serán cancelados por esta función. Esta función requiere soporte de databasefactory. Puede verificarlo en la página de Asesoramiento de seguridad. Esta configuración debe estar activada. Nunca la desactive casualmente.');
    define($constpref . '_DBTRAPWOSRV', 'Nunca verificar _SERVER para anti-inyección SQL');
    define($constpref . '_DBTRAPWOSRVDSC', 'Algunos servidores siempre habilitan la captura de la capa DB. Causa detecciones incorrectas como ataque de inyección SQL. Si obtuvo tales errores, active esta opción. Debe saber que esta opción debilita la seguridad de la captura de la capa DB anti-inyección SQL.');

    define($constpref . '_BIGUMBRELLA', 'habilitar anti-XSS (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'Esto lo protege de casi todos los ataques a través de vulnerabilidades XSS. Pero no es 100%');

    define($constpref . '_SPAMURI4U', 'anti-SPAM: URL para usuarios normales');
    define($constpref . '_SPAMURI4UDSC', 'Si se encuentra este número de URL en los datos POST de usuarios que no son administradores, el POST se considera SPAM. 0 significa deshabilitar esta función.');
    define($constpref . '_SPAMURI4G', 'anti-SPAM: URL para invitados');
    define($constpref . '_SPAMURI4GDSC', 'Si se encuentra este número de URL en los datos POST de invitados, el POST se considera SPAM. 0 significa deshabilitar esta función.');

    //3.40b
    define($constpref . '_ADMINHOME', 'Inicio');
    define($constpref . '_ADMINABOUT', 'Acerca de');
    //3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Detener el spam del foro');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'Comprueba los datos POST contra los spammers registrados en la base de datos www.stopforumspam.com. Requiere la biblioteca php CURL.');
    // 3.60
    define($constpref . '_ADMINSTATS', 'Visión general');
    define($constpref . '_BANIP_TIME0DSC', 'Tiempo de suspensión en segundos para prohibiciones automáticas de IP');
}
