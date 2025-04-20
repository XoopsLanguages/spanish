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
 * Xoops locale
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('Acceso restringido');

setlocale(LC_ALL, 'es_ES');

// !!IMPORTANTE!! insertar '\' antes de cualquier carácter entre los caracteres reservados: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insertar doble '\' antes de 't','r','n'
define('_TODAY', "\H\o\y G:i");
define('_YESTERDAY', "\A\y\\e\r G:i");
define('_MONTHDAY', 'd/m G:i');
define('_YEARMONTHDAY', 'd/m/Y G:i');
define('_ELAPSE', 'hace %s');
define('_TIMEFORMAT_DESC', "Formatos válidos: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" o \"custom\" - formato determinado según el intervalo a presentar; \"e\" - Transcurrido; \"mysql\" - Y-m-d H:i:s;<br>" . "cadena especificada - Consulte el <a href=\"https://php.net/manual/es/function.date.php\" rel=\"external\">manual de PHP</a>.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * Clase local de XOOPS
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2016 Proyecto XOOPS (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Formatos de números
     *
     * @param  mixed $number
     * @return string
     */
    public function number_format($number)
    {
        return number_format($number, 2, ',', '.');
    }

    /**
     * Formato de moneda
     *
     * @param  string $format
     * @param  float  $number
     * @return string
     */
    public function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'es_ES');

        return money_format($format, $number);
    }
}
