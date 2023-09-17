<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Objetos</title>
</head>
<body>

    <?php

    require_once 'Caneta.php';

    $c1 = new Caneta;
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = true;
    $c1->tampar();

    $c1->rabiscar();
    $c1->rabiscar();
    $c1->rabiscar();

    print_r($c1); // Mostra o estado do objeto.
    print("<br><br>");

    $c2 = new Caneta;
    $c2->cor = "Verde";
    $c2->carga = 50;
    $c2->tampar();

    print_r($c2)


    ?>
    
</body>
</html>