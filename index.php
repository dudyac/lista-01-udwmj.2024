<?php

$n1 = 0;
$n2 = 0;
$resultaddo = 0;
$calcular = 'somar';


if(isset($_GET['n1'], $_GET['n2'], $_GET['calcular'])) {
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $calcular = $_GET['calcular'];

    switch($calcular) {
        case 'somar':
                $resultado = $n1 + $n2;
            break;
        case 'subtrair':
            $resultado = $n1 - $n2;
            break; 
         case 'multiplicar':
            $resultado = $n1 * $n2;
            break;   
        case 'dividir':
            $resultado = $n1 / $n2;
            break;     
    }
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    
</head>
<body>
    
<form>

    Primeiro número <br/>
    <input type="number" name="n1" value=<? $n1 ?> required/><br />
    Segundo número <br />
    <input type="number" name="n2" value=<? $n2 ?> required/><br /><br />
    <select name="calcular">
        <option value="somar" <?= ($calcular=='somar')? 'Selected':''; ?>  >Somar</option>
        <option value="subtrair" <?= ($calcular=='subtrair')? 'Selected':''; ?>  >Subtrair</option>
        <option value="multiplicar" <?= ($calcular=='multiplicar')? 'Selected':''; ?> >Multiplicar</option>
        <option value="dividir" <?= ($calcular=='dividir')? 'Selected':''; ?> >Dividir</option>

    </select>

    <br /><br />
    <input type="submit" value="calcular" />
    <br /><br />
    <p>O resultado é: <?= $resultado ?></p>

</form>


</body>
</html>