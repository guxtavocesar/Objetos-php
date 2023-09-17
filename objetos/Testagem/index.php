<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atributos de funcionalidades</title>
</head>
<body>

<?php 
    require_once "Funcionalidade.php";

    $funcionalidade = new Funcionalidade;

    $eliminarinfo = $funcionalidade->dados['eliminar'];
    $historicoinfo = $funcionalidade->dados['historico'];
    $editarinfo = $funcionalidade->dados['editar'];
    
    var_dump($eliminarinfo);
    echo "<br><br>";
    var_dump($historicoinfo);
    echo "<br><br>";
    var_dump($editarinfo);

?>
    
</body>
</html>