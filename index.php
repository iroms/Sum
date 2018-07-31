<?php

function sum($a, $b)
{
    $res = $a + $b;
    return "The terrible deamon says, that $a + $b = $res\n";
}

$a = 32;
$b = 45;

echo sum($a, $b);
