<?php

function str_lower_epur(string $str = null)
{
    if (!is_string($str)) {
        return null;
    }
    $newstr = "";
    $str = trim($str);
    $str = strtolower($str);
    $strlen = strlen($str);
    for ($i = 0; $i < $strlen; $i++) {
        if ($str[$i] == " ") {
            if ($str[$i + 1] == " ") {
                continue;
            } else {
                $newstr = $newstr . " ";
            }
        } elseif ($i == $strlen - 1 || $str[$i + 1] == " ") {
            $newstr = $newstr . strtoupper($str[$i]);
        } else {
            $newstr = $newstr . $str[$i];
        }
    }
    return $newstr;
}
