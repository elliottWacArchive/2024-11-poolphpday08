<?php

function my_rounds(float $nb)
{
    $arr1 = round($nb);
    $arr2 = ceil($nb);
    $arr3 = intval($nb);
    echo "Results : $arr1 - $arr2 - $arr3\n" ;
}
