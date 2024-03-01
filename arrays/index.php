<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

<?php

// $product[0] ="açaí";
// $product[1] ="bacaba";
// $product[2] ="açaí branco";
// $product[3] ="camarão";

$product = [
    ["description" => "nike shoes", "quantity" => 15, "price" => 205.75,],
    ["description" => "adida shoes", "quantity" => 35, "price" => 59.75,],
    ["description" => "topper shoes", "quantity" => 75, "price" => 25.50,],
    ["description" => "mizzuno wave shoes", "quantity" => 10, "price" => 350.70]
];

?>
<p><?php echo $product[0]["description"]; ?></p>
<p><?php echo $product[0]["quantity"]; ?></p>
<p><?php echo $product[0]["price"]; ?></p>
<hr>
<p><?php echo $product[1]["description"]; ?></p>
<p><?php echo $product[1]["quantity"]; ?></p>
<p><?php echo $product[1]["price"]; ?></p>
<hr>
<p><?php echo $product[2]["description"]; ?></p>
<p><?php echo $product[2]["quantity"]; ?></p>
<p><?php echo $product[2]["price"]; ?></p>
<hr>
<p><?php echo $product[3]["description"]; ?></p>
<p><?php echo $product[3]["quantity"]; ?></p>
<p><?php echo $product[3]["price"]; ?></p>
<hr>

</body>
</html>






