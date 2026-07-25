<div id="help-template" class="outer">
    <h1 class="head">Ayuda: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Volver a la administración de Protector"> Protector <img src="<{xoAdminIcons 'home.png'}>" alt="Volver a la administración de Protector"/></a></h1>
    <h4 class="odd">Descripción</h4>

    <p class="even">Protector es un módulo para defender su XOOPS CMS de varios ataques maliciosos.</p>
    <h4 class="odd">Instalar/desinstalar</h4>

    <p>Primero, defina XOOPS_TRUST_PATH en mainfile.php si aún no lo ha hecho.</p>
    <br>

    <p>Copie html/modules/protector en el archivo en su XOOPS_ROOT_PATH/modules/</p>

    <p>Copie xoops_trust_path/modules/protector en el archivo en su XOOPS_TRUST_PATH/modules/</p>
    <br>

    <p>Active el permiso de escritura de XOOPS_TRUST_PATH/modules/protector/configs</p>
    <h4 class="odd">= Cómo rescatar =</h4>

    <p class="even">Si Protector le ha prohibido el acceso, simplemente elimine los archivos en XOOPS_TRUST_PATH/modules/protector/configs/</p>
    <h4 class="odd">Introducción para los complementos de filtro en este archivo.</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        un complemento anti-SPAM.
        <br>
        Se rechazará toda publicación de la IP registrada en RBL.
        <br>
        Este complemento puede ralentizar el rendimiento de la publicación, especialmente los módulos de chat.
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        un complemento anti-SPAM.
        <br>
        Se rechazará toda publicación de la IP registrada en http:BL.
        <br>
        Antes de usarlo, obtenga HTTPBL_KEY de http://www.projecthoneypot.org/ y configúrelo en el archivo de filtro.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        un complemento anti-SPAM.
        <br>
        Se rechazará la publicación sin caracteres multibyte.
        <br>
        Este complemento es solo para sitios de japonés, chino tradicional, chino simplificado y coreano.
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        Todos los datos de publicación enviados por los invitados serán purificados por HTMLPurifier.
        <br>
        Si permite que los invitados publiquen HTML, le recomiendo encarecidamente que lo habilite.
    </p>

    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        Este complemento evita que el robot registre usuarios en su sitio.
        <br>
        Se requiere que JavaScript funcione en el navegador de los visitantes.
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        Especifique un mensaje para los visitantes que intentaron contraseñas incorrectas más veces de las especificadas.
        <br>
        Todos los complementos llamados *_message.php especifican el mensaje para los accesos rechazados.
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        Cuando la limitación de ancho de banda funciona desafortunadamente, este complemento lo registra en el error_log de Apache.
    </p>

    <p>Todos los complementos llamados *_errorlog.php registran cierta información en el error_log de Apache.</p>
    <h4 class="odd">Tutorial</h4>

    <p class="even">Tutorial próximamente.</p>
</div>
