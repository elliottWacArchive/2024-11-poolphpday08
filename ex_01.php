<?php

function which_is_longer($str1 = null, $str2 = null)
{
    if (!is_string($str1) || !is_string($str2)) {
        return -1;
    }
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    if ($len1 > $len2) {
        return $len1;
    } else {
        return $len2;
    }
}
