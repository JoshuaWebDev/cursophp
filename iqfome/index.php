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
    // remover espaços e linhas em branco
    $dbFile = trim($dbFile);
    $itens = explode("\n", $dbFile);

    $totalItens = count($itens);

?>

<p><?php echo "Total de Itens: " . $totalItens; ?></p>

<table border="1">
  <tr>
    <th>ID</th>
    <th>Descrição</th>
    <th>Categoria</th>
    <th>Preço</th>
    <th>Estabelecimento</th>
    <th colspan="3">Opções</th>
  </tr>
  <?php
    foreach($itens as $key => $item) {
        $temp = explode(",", $item);
    ?>
        <tr>
            <td><?php echo $temp[0] ; ?></td>
            <td><?php echo ucfirst($temp[1]) ; ?></td>
            <td><?php echo ucfirst($temp[2]) ; ?></td>
            <td><?php echo ucfirst($temp[3]) ; ?></td>
            <td><?php echo ucfirst($temp[4]) ; ?></td>
            <td>
                <a href="update.php?id=<?php echo $temp[0]; ?>">Editar</a>
            </td>
            <td>
                <a href="show.php?id=<?php echo $temp[0]; ?>">Detalhes</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $temp[0]; ?>">Remover</a>
            </td>
        </tr>
    <?php } ?>
</table>

    

    
<?php
}

include_once("footer.php");