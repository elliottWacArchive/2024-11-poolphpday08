<?php

function str_to_wordtab($str = null, $sep = null)
{
    if (!is_string($str) || !is_string($sep) || !is_int(strpos($str, $sep))) {
         return null;
    }
    return explode($sep, $str); // si il repasse pas gerer le cas ou le tab est vide
}
