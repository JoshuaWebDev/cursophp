<?php

function add($n1, $n2)
{
    return $n1 + $n2;
}

function sub($n1, $n2)
{
    return $n1 - $n2;
}

function mult($n1, $n2)
{
    return $n1 * $n2;
}

function div($n1, $n2)
{
    if ($n2 != 0) {
        return $n1 / $n2;
    } else {
        return "Não pode dividir por zero!";
    }
    
}