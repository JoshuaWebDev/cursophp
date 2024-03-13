<?php

function helloWorld() {
    return "Olá Mundo!";
}

$mensagem = helloWorld();

echo "<h1 style='color:green'>" . $mensagem . "</h1>";