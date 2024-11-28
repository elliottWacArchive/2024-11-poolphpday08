<?php

function get_median($arr)
{
    sort($arr);
    $arrlen = count($arr);
    $res = 0;
    if ($arrlen % 2 == 0) {
        $res = $arr[floor($arrlen / 2) - 1] + $arr[floor($arrlen / 2)];
        $res = $res / 2;
    } else {
        $res = $arr[floor($arrlen / 2)];
    }
    return $res;
}
