<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fake Food</title>
</head>
<body>
    <h1>Cardápio</h1>
    <form method="post" action="save.php">
        <fieldset>
            <legend>Lanches</legend>

            <input type="checkbox" name="burguer_simples"> Hamburguer Simples <br>
            <input type="checkbox" name="x-burguer"> X-Burguer <br>
            <input type="checkbox" name="misto_quente"> Misto Quente <br>
            <input type="checkbox" name="pizza_calabresa"> Pizza Calabresa <br>
            <input type="checkbox" name="pizza_portuguesa"> Pizza Portuguesa <br>
            <input type="checkbox" name="pizza_4_queijos"> Pizza 4 Queijos <br>
            <input type="checkbox" name="pizza_muzzarela"> Pizza Muzzarela <br>
            <input type="checkbox" name="pizza_acai_charque"> Pizza de Açaí com Charque <br>
        </fieldset>

        <fieldset>
            <legend>Bebidas</legend>

            <input type="checkbox" name="coca_cola_2l"> Coca-Cola 2 L <br>
            <input type="checkbox" name="coca_cola_1l"> Coca-Cola 1 L <br>
            <input type="checkbox" name="coca_cola_latinha"> Coca-Cola latinha <br>
            <input type="checkbox" name="guarana_1l"> Guaraná 1 L <br>
            <input type="checkbox" name="guarana_latinha"> Guaraná 1 latinha <br>
            <input type="checkbox" name="soda_latinha"> Soda limonada latinha <br>
            <input type="checkbox" name="fanta_uva_latinha"> Fanta Uva latinha <br>
            <input type="checkbox" name="fanta_laranja_latinha"> Fanta Laraja latinha <br>
            
        </fieldset>
    
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>