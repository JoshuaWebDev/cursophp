<?php

require_once "operations.php";

$number1   = isset($_GET["number1"]) ? $_GET["number1"] : 0;
$number2   = isset($_GET["number2"]) ? $_GET["number2"] : 0;
$operator  = isset($_GET["operator"]) ? $_GET["operator"] : null;
$resultado = 0;

switch ($operator) {
    case 'sum':
        $resultado = add($number1, $number2);
        break;
    case 'sub':
        $resultado = sub($number1, $number2);
        break;
    case 'mult':
        $resultado = mult($number1, $number2);
        break;
    case 'div':
        $resultado = div($number1, $number2);
        break;
    
    default:
        $resultado = "Informe um operador aritmético!";
        break;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label>Número 1: </label>
        <input type="number" name="number1"><br />

        <label>Número 2: </label>
        <input type="number" name="number2"><br />

        <label>Operação: </label><br />
        <input type="radio" name="operator" value="sum"> Soma <br>
        <input type="radio" name="operator" value="sub"> Subração <br>
        <input type="radio" name="operator" value="mult"> Multiplicação <br>
        <input type="radio" name="operator" value="div"> Divisão <br>

        <input type="submit">
    </form>

    <?php if (is_numeric($resultado)) {
        echo "<p>Resultado: $resultado </p>";
    }
    ?>
</body>
</html>
