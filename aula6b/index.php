<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - POO </title>
</head>
<body>
    <pre>
        <h1>Projeto Controle Remoto</h1>
    <?php
    require_once 'ControleRemoto.php';
    $c = new ControleRemoto;
    $c->abrirMenu();
    $c->ligar();
    $c->maisVolume();
   
    
    
                    
    ?>
    </pre>
</body>
</html>