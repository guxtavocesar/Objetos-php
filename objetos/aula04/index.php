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

        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c2 = new Caneta("CIB", "Vermelha", 1.7);
        print_r($c1);
        print_r($c2);

        print "<br>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        print "<br>Eu tenho uma caneta {$c2->getModelo()} de ponta {$c2->getPonta()}";

    
    ?>

</pre>
    
</body>
</html>