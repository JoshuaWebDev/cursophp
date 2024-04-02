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

<h1>Alterar Dados do Item <?php echo $id; ?></h1>

<form action="updater.php" method="post">
    <input name="id" type="hidden" value="<?php echo $itemSelecionado[0]; ?>">
    <label>Descrição: </label>
    <input type="text" name="description" value="<?php echo $itemSelecionado[1]; ?>"><br>

    <label>Categoria: </label>
    <select name="category">
        <option value="bebida" <?php if ($itemSelecionado[2] == 'bebida') {echo 'selected';} ?>>
            Bebida
        </option>
        <option value="lanche" <?php if ($itemSelecionado[2] == 'lanche') {echo 'selected';} ?>>
            Lanche
        </option>
        <option value="refeição"  <?php if ($itemSelecionado[2] == 'refeição') {echo 'selected';} ?>>
            Refeição
        </option>
        <option value="sobremesa"  <?php if ($itemSelecionado[2] == 'sobremesa') {echo 'selected';} ?>>
            Sobremesa
        </option>
    </select>
    <br>

    <label>Preço: </label>
    <input type="text" name="price" value="<?php echo $itemSelecionado[3]; ?>"><br>

    <label>Estabelecimento</label>
    <input type="text" name="local" value="<?php echo $itemSelecionado[4]; ?>"><br>

    <input type="submit" value="Alterar">
</form>

<a href="index.php">Voltar</a>

<?php

include_once("footer.php");