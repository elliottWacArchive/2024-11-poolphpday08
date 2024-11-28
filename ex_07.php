<?php

function count_char($str)
{
    $i = 0;
    $arr = array();
    for ($i = 0; $i < strlen($str); $i++) {
        if (($str[$i] != ' ') && ($str[$i] != "\t")) {
            $arr[$str[$i]] = 0;
        }
    }
    foreach ($arr as $key => $val) {
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == $key) {
                $arr[$key] += 1;
            }
        }
    }
    return $arr;
}
