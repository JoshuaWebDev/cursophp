<?php

$clientes = [
    ["name" => "Peter Parker", "email" => "parker.peter@hotmail.com"],
    ["name" => "Mary Jane", "email" => "maryjane@yahoo.com"],
    ["name" => "Gwen Stacy", "email" => "stacy.gwen@gmail.com"],
    ["name" => "Otto Octavius", "email" => "dr.octavius@outlook.com"],
    ["name" => "Norman Osborn", "email" => "greengoblin@osborn.com"],
    ["name" => "Harry Osborn", "email" => "greengoblin2@osborn.com"]
];

echo "<hr>";

foreach($clientes as $cliente) {
    foreach($cliente as $chave => $valor) {
        echo $chave . ": " . $valor . "<br>";
    }
    echo "<br>";
}

echo "<hr>";

foreach ($clientes as $key => $value) {
    echo $key + 1 . " - " . $value["name"] . " - " . $value["email"] . "<br>";
}

// foreach ($clientes as $cliente) {
//     echo "<strong>Nome: </strong>" . $cliente["name"] . "<br>";
//     echo "<strong>E-mail: </strong>" . $cliente["email"] . "<br>";
//     echo "<br>";
// }