<?php

include "soma.php";
include "sub.php";
include "conections.php";
include "conections.php";

$n1;
$n2;
$op;

if ($op = "soma") {
    $resultado = soma($n1, $n2);
    echo $resultado;
}

$user = "admin";

if ($user == "admin") {
    include "admin.php";
} else {
    include "default.php";
}