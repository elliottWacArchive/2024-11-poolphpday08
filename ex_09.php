<?php

function make_pangolins(&$arr)
{
    foreach ($arr as $key => $val) {
        $arr[$key] = "pangolin";
    }
}
