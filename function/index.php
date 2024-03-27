<?php

function cadastrarItem($nome, $quantidade)
{
    $mensagem = "<p><b>Nome: </b> <i>". strtolower($nome) . "</i> </p>";
    if ($quantidade > 0) {
        return $mensagem  . "<p><b>Quantidade: </b> <i>$quantidade</i></p>";
    }

    return "<strong>Você precisa informar a quantidade!</strong>";
}

$x = cadastrarItem("Notebook Asus", 10);

echo $x;