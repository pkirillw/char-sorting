<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 15.11.2018
 * Time: 14:37
 */

namespace pkirillw\charSorting;

class CharSorting
{

    public function __construct()
    {

    }

    /**
     * @param $string
     * @param $delimiter
     * @return string
     */
    public function sortChar($string, $delimiter)
    {
        $result = [];
        $words = explode($delimiter, $string);
        foreach ($words as $word) {
            $wordParts = $this->strSplitUnicode($word);
            if ($wordParts !== false) {
                sort($wordParts);
                $result[] = implode('', $wordParts);
            }
        }
        return implode(' ', $result);
    }

    /**
     * @param $str
     * @return array[]|false|string[]
     */
    private function strSplitUnicode($str)
    {
        $tmp = preg_split('~~u', $str);
        return $tmp;
    }

}