<?php

function clear_and_replace($str, $world)
{
    $str = trim($str);
    $a = strpos($str, $world);
    $b = strpos($str, $world, $a + 1) + strlen($world);
    $substr = substr($str, 0, $b);
    $exstr = substr($str, $b, -1) . $str[strlen($str) - 1];
    $str = str_replace($world, "Pangolin", $substr) . $exstr;
    return $str;
}
