<?php
$dbFile = file_get_contents("db.csv");
$description = $_POST['description'] ?? "";
$category    = $_POST['category']    ?? "";
$price       = $_POST['price']       ?? "";
$local       = $_POST['local']       ?? "";
$dados       = "";
$totalItens  = 0;

if ($dbFile != "") {
    $dbFile = trim($dbFile);
    $itens = explode("\n", $dbFile);
    $totalItens = count($itens);
}

if ($description && $category && $local) {
    $dados = "\n" . $totalItens+1 . "," . $description . "," . $category . "," . $price . "," . $local;
    file_put_contents('db.csv', $dados, FILE_APPEND);
    echo "Dados salvos com sucesso na base de dados!";
}

include_once("top.php");

?>
    <h1 class="titulo">Cadastrar Item</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Descrição: </label>
        <input type="text" name="description"><br>

        <label>Categoria: </label>
        <select name="category">
            <option value="bebida">Bebida</option>
            <option value="lanche">Lanche</option>
            <option value="refeição">Refeição</option>
            <option value="sobremesa">Sobremesa</option>
        </select>
        <br>

        <label>Preço: </label>
        <input type="text" name="price"><br>

        <label>Estabelecimento</label>
        <input type="text" name="local"><br>

        <input type="submit">
    </form>
    
    <a href="index.php">Voltar</a>

<?php include_once("footer.php"); ?>