<?php
include_once("top.php");
$dbFile = file_get_contents("db.csv");

// remover espaços e linhas em branco
$dbFile = trim($dbFile);
$itens = explode("\n", $dbFile);

$id = $_GET['id'];
$itemSelecionado = "";

foreach($itens as $item) {
    if ($item[0] == $id) {
        $itemSelecionado = explode(",", $item);
    }
}

?>

<h1>Detalhes do Item <?php echo $id; ?></h1>

<ul>
    <li><b>Descrição:</b> <?php echo $itemSelecionado[1]; ?></li>
    <li><b>Categoria:</b> <?php echo $itemSelecionado[2]; ?></li>
    <li><b>Preço:</b> <?php echo $itemSelecionado[3]; ?></li>
    <li><b>Estabelecimento:</b> <?php echo $itemSelecionado[4]; ?></li>
</ul>

<a href="index.php">Voltar</a>

<?php

include_once("footer.php");