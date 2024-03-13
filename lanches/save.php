<?php
$lanches["burguer_simples"]    = isset($_POST["burguer_simples"])    ? $_POST["burguer_simples"]    : "" ;
$lanches["x-burguer"]          = isset($_POST["x-burguer"])          ? $_POST["x-burguer"]          : "" ;
$lanches["misto_quente"]       = isset($_POST["misto_quente"])       ? $_POST["misto_quente"]       : "" ;
$lanches["pizza_calabresa"]    = isset($_POST["pizza_calabresa"])    ? $_POST["pizza_calabresa"]    : "" ;
$lanches["pizza_portuguesa"]   = isset($_POST["pizza_portuguesa"])   ? $_POST["pizza_portuguesa"]   : "" ;
$lanches["pizza_4_queijos"]    = isset($_POST["pizza_4_queijos"])    ? $_POST["pizza_4_queijos"]    : "" ;
$lanches["pizza_muzzarela"]    = isset($_POST["pizza_muzzarela"])    ? $_POST["pizza_muzzarela"]    : "" ;
$lanches["pizza_acai_charque"] = isset($_POST["pizza_acai_charque"]) ? $_POST["pizza_acai_charque"] : "" ;

$bebidas["coca_cola_2l"]          = isset($_POST["coca_cola_2l"])          ? $_POST["coca_cola_2l"]          : "" ;
$bebidas["coca_cola_1l"]          = isset($_POST["coca_cola_1l"])          ? $_POST["coca_cola_1l"]          : "" ;
$bebidas["coca_cola_latinha"]     = isset($_POST["coca_cola_latinha"])     ? $_POST["coca_cola_latinha"]     : "" ;
$bebidas["guarana_1l"]            = isset($_POST["guarana_1l"])            ? $_POST["guarana_1l"]            : "" ;
$bebidas["guarana_latinha"]       = isset($_POST["guarana_latinha"])       ? $_POST["guarana_latinha"]       : "" ;
$bebidas["soda_latinha"]          = isset($_POST["soda_latinha"])          ? $_POST["soda_latinha"]          : "" ;
$bebidas["fanta_uva_latinha"]     = isset($_POST["fanta_uva_latinha"])     ? $_POST["fanta_uva_latinha"]     : "" ;
$bebidas["fanta_laranja_latinha"] = isset($_POST["fanta_laranja_latinha"]) ? $_POST["fanta_laranja_latinha"] : "" ;

$pedidos = [
    "lanches" => $lanches,
    "bebidas" => $bebidas
];

foreach ($pedidos as $chave => $valor) {
    foreach ($valor as $key => $value) {
        echo $value . "<br>";
    }
    echo "<hr>";
}

// echo "<pre>";
// print_r($pedidos);
// echo "</pre>";