<?php

function my_round(float $nb)
{
    $arr1 = round($nb);
    $arr2 = intval($nb + 1);
    $arr3 = intval($nb);
    echo "Results : $arr1 - $arr2 - $arr3\n" ;
}
