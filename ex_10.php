<?php

function print_calls()
{
    static $call = 1;
    $val = null;
    if ($call % 2 == 0) {
        $val = $call;
    }
    $call++;
    return $val;
}
