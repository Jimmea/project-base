<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 2/6/19
 * Time: 15:29
 */

/**
 * replaceMQ()
 *
 * @param mixed $text
 * @return
 */
function replace_mq($text)
{
    $text = str_replace("\'", "'", $text);
    $text = str_replace("'", "''", $text);

    return $text;
}

/**
 * htmlspecialbo()
 *
 * @param mixed $str
 * @return
 */
function htmlspecialbo($str)
{
    $arrDenied = array('<', '>', '\"', '"');
    $arrReplace = array('&lt;', '&gt;', '&quot;', '&quot;');
    $str = str_replace($arrDenied, $arrReplace, $str);

    return $str;
}

/**
 * removeAccent()
 *
 * @param mixed $mystring
 * @return
 */
function remove_accent($mystring)
{
    $marTViet = array(
        // Chữ thường
        "à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ",
        "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ",
        "ì", "í", "ị", "ỉ", "ĩ",
        "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ", "ợ", "ở", "ỡ",
        "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ",
        "ỳ", "ý", "ỵ", "ỷ", "ỹ",
        "đ", "Đ", "'",
        // Chữ hoa
        "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ",
        "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ",
        "Ì", "Í", "Ị", "Ỉ", "Ĩ",
        "Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ", "Ờ", "Ớ", "Ợ", "Ở", "Ỡ",
        "Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ",
        "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ",
        "Đ", "Đ", "'",
    );
    $marKoDau = array(
        /// Chữ thường
        "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a",
        "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e",
        "i", "i", "i", "i", "i",
        "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o",
        "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u",
        "y", "y", "y", "y", "y",
        "d", "D", "",
        //Chữ hoa
        "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",
        "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E",
        "I", "I", "I", "I", "I",
        "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O",
        "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U",
        "Y", "Y", "Y", "Y", "Y",
        "D", "D", "",
    );

    return str_replace($marTViet, $marKoDau, $mystring);
}


if (!function_exists('cut_string'))
{
    /**
     * cut_string()
     *
     * @param mixed $str
     * @param mixed $length
     * @param string $char
     * @return
     */
    function cut_string($str, $length, $char = " ...")
    {
        //Nếu chuỗi cần cắt nhỏ hơn $length thì return luôn
        $strlen = mb_strlen($str, "UTF-8");
        if ($strlen <= $length) return $str;

        //Cắt chiều dài chuỗi $str tới đoạn cần lấy
        $substr = mb_substr($str, 0, $length, "UTF-8");
        if (mb_substr($str, $length, 1, "UTF-8") == " ") return $substr . $char;

        //Xác định dấu " " cuối cùng trong chuỗi $substr vừa cắt
        $strPoint = mb_strrpos($substr, " ", "UTF-8");

        //Return string
        if ($strPoint < $length - 20) return $substr . $char;
        else return mb_substr($substr, 0, $strPoint, "UTF-8") . $char;
    }
}