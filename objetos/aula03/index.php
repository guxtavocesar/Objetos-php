<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Objetos</title>
</head>
<body>

<pre>

    <?php

    require_once 'Caneta.php';

    $c1          = new Caneta;
    $c1->modelo  = "BIC Cristal";
    $c1->cor     = "Azul";
 // $c1->ponta   = 0.5;  *ATRIBUTO PRIVADO, APENAS SUA RESPECTIVA CLASSE PODE MODIFICÁ-LO*
 // $c1->carga   = 99;   *ATRIBUTO PROTEGIDO, APENAS SUA CLASSE E SUAS RESPECTIVAS SUBCLASSES PODEM TER ACESSO*
 // $c1->tampada = TRUE; *ATRIBUTO PROTEGIDO, APENAS SUA CLASSE E SUAS RESPECTIVAS SUBCLASSES PODEM TER ACESSO*
    $c1->rabiscar();
    $c1->tampar();

    print_r($c1);



    ?>

</pre>
    
</body>
</html>