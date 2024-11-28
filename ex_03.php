<?php

function my_mail($str = null)
{
    if (!is_string($str)) {
        exit;
    }
    $arr = first_aro($str);
    $lastpoint = last_point($str);
    $newstr = "";
    if ($arr == null || $lastpoint == null || $lastpoint < $arr) {
        echo "\n";
        exit;
    }
    for ($i = $arr + 1; $i < $lastpoint; $i++) {
        $newstr = $newstr . $str[$i];
    }
    echo $newstr . "\n";
}

function last_point($str)
{
    $x = null;
    for ($i = 0; $i < strlen($str) - 1; $i++) {
        if ($str[$i] == '.') {
            $x  = $i;
        }
    }
    return $x;
}

function first_aro($str)
{
    $x = null;
    for ($i = 0; $i < strlen($str) - 1; $i++) {
        if ($str[$i] == '@') {
            $x = $i;
            return $x;
        }
    }
    return $x;
}
// my_mail("salut@fefefe.fr");
