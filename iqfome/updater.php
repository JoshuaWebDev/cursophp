<?php

$dbFile     = file_get_contents("db.csv");
$content    = "";
$itens      = [];
$oldItens   = [];
$newItens   = [];

$id          = $_POST['id']          ?? "";
$description = $_POST['description'] ?? "";
$category    = $_POST['category']    ?? "";
$price       = $_POST['price']       ?? "";
$local       = $_POST['local']       ?? "";

if ($dbFile == "") {
    //
} else {
    // remover espaços e linhas em branco
    $temp  = trim($dbFile);
    $itens = explode("\n", $temp);
}

// alimenta o array $oldItens com todos os itens de db.csv
foreach($itens as $item) {
    $t = explode(",", $item);
    array_push($oldItens, $t);
}

foreach($oldItens as $item) {
    $newItem = [$id, $description, $category, $price, $local];
    array_push($newItens, $item);
    if ($item[0] == $id) {
        array_pop($newItens);
        array_push($newItens, $newItem);
    }
}

foreach($newItens as $item) {
    foreach($item as $key => $i) {
        $content .= $i;
        if ($key == 4) {
            $content .= "\n";
        } else {
            $content .= ",";
        }
    }
}

if (file_put_contents("db.csv", $content)) {
    echo "Arquivo alterado com sucesso!";
}

