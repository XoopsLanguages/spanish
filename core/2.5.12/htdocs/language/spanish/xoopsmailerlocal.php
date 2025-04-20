<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */

defined('XOOPS_ROOT_PATH') || exit('Acceso restringido');
/**
 * Localizar las funciones de correo
 *
 * La localización en español es únicamente para demostración
 */
// No cambies el nombre de la clase
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        // Se supone que no es necesario cambiar el juego de caracteres
        $this->charSet = strtolower(_CHARSET);
        // DEBES especificar el valor del código de idioma para que el archivo exista: XOOPS_ROOT_PATH/class/mail/phpmailer/language/lang-["tu-código-de-idioma"].php
        $this->multimailer->setLanguage('es');
    }

    /**
     * Los idiomas multibyte son alentados a crear su propio método para codificar FromName
     *
     * @param string $text
     *
     * @return string
     */
    public function encodeFromName($text)
    {
        // Activa la siguiente línea si es necesario
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }

    /**
     * Los idiomas multibyte son alentados a crear su propio método para codificar el Asunto
     *
     * @param string $text
     *
     * @return string
     */
    public function encodeSubject($text)
    {
        // Activa la siguiente línea si es necesario
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
