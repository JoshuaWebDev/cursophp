<?php

$conteudo = [
    "Cebola.",
    "Batata.",
    "Cenoura.",
    "Abóbora.",
    "Arroz.",
    "Feijão.",
    "Macarrão."
];

$dados = "";

if (count($conteudo) > 0) {
    foreach($conteudo as $c) {
        $dados .= $c . "\n"; 
    }
}

file_put_contents("dados.txt", $dados, FILE_APPEND);

$arquivo = file_get_contents("dados.txt");

$itens = explode(".", $arquivo);

if (!empty($itens)) {
    echo "<p>Lista de Compras</p>";
    echo "<ul>";
    foreach($itens as $item) {
        if (!empty($item)) {
            echo "<li>$item</li>";
        }
    }
    echo "</ul>";
} else {
    echo "Não há itens cadastrados";
}

