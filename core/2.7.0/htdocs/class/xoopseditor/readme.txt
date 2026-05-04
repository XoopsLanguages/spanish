Guía de usuario para xoopseditor
xoopseditor proporciona una colección de editores para XOOPS.

Instrucciones:
1) Verificar los archivos
2) Revise el archivo xoops_version.php en el directorio /xoopseditor/ para asegurarse de que es más reciente que los que ya tiene.

Cargar /xoopseditor/
Suba el directorio /xoopseditor/ a /XOOPS/class/ para que quede en /XOOPS/class/xoopseditor/ con la siguiente estructura:
XOOPS/class/xoopseditor/dhtmlext

XOOPS/class/xoopseditor/dhtmltextarea

XOOPS/class/xoopseditor/fckeditor

XOOPS/class/xoopseditor/koivi

XOOPS/class/xoopseditor/textarea

XOOPS/class/xoopseditor/tinymce

3) Configurar las preferencias según corresponda
3.1 Archivos de idioma:
En ./dhtmlext(todos los editores)/language/: Cree su archivo de idioma local basado en english.php.

3.2 Configuración del editor:
En ./dhtmlext(todos los editores)/editor_registry.php: Establezca las configuraciones para el editor:
order: Orden de visualización si se utiliza la selección de editores, 0 para desactivar.

nohtml: Funciona para sintaxis no HTML.

3.3 Módulo FCKeditor:
Copie los archivos de ./FCKeditor/module/ a las carpetas de módulos si se requieren permisos de carga específicos, almacenamiento u opciones del editor para un módulo.

3.3.1 ./FCKeditor/module/fckeditor.config.js: Para opciones del editor, normalmente no necesita modificarlo.

3.3.2 ./FCKeditor/module/fckeditor.connector.php: Especifique la carpeta para la exploración de archivos (y almacenamiento de carga) => XOOPS/uploads/XOOPS_FCK_FOLDER/. Esta carpeta debe crearse manualmente.

3.3.3 ./FCKeditor/module/fckeditor.upload.php: Especifique permisos de carga y almacenamiento de carga.

3.4 Carpeta de carga de FCKeditor:
Cree la carpeta XOOPS/uploads/fckeditor/ si FCKeditor está habilitado. Se usa para cargas cuando no se especifica otra carpeta de carga.

3.5 Archivos de idioma de TinyMCE:
Descargue los archivos de idioma locales para TinyMCE desde http://tinymce.moxiecode.com/language.php y guárdelos en ./tinymce/tinymce/jscripts/.

4) Verificar nombres de archivos
En sistemas sensibles a mayúsculas y minúsculas, asegúrese de que los nombres de los archivos sean exactamente correctos. Por ejemplo, FCKeditor no es lo mismo que fckeditor.

5) Guía de desarrollo
Consulte el archivo /xoopseditor/sampleform.inc.php para obtener una guía de desarrollo.

