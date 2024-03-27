<?php
$dbFile = file_get_contents("db.csv");
include_once("top.php");
$totalItens = "";
?>

<a href="new.php">Cadastrar Item</a> <br><br>

<?php

if ($dbFile == "") {
    echo "Não há itens cadastrados!";
} else {
    $dbFile = trim($dbFile);
    $itens = explode("\n", $dbFile);

    $totalItens = count($itens);

    echo "Total de Itens: " . $totalItens . "<br><br>";

    foreach($itens as $key => $item) {
        $temp = explode(",", $item);
    
        echo "<b>Nº do Item: </b>" . $temp[0] . "<br>";
        echo "<b>Descrição: </b>" . ucfirst($temp[1]) . "<br>";
        echo "<b>Categoria: </b>" . ucfirst($temp[2]) . "<br>";
        echo "<b>Preço: </b> R$ " . ucfirst($temp[3]) . "<br>";
        echo "<b>Estabelecimento: </b>" . ucfirst($temp[4]) . "<br>";
        echo "<a href='update.php'>Editar</a>";
        echo " | ";
        echo "<a href='show.php?id=".$temp[0]."'>Detalhes</a>";
        echo "<hr>";
    }
}

include_once("footer.php");