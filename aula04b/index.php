<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO </title>
</head>
<body>
    <pre>
    <?php
    require_once 'Caneta.php';
/*
    $c1 = new Caneta;
    $c1->setModelo("BIC");
    $c1->setPonta(0.5);
   
   
   echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

   */

   // Novo construtor
   
   // se não passar os valores dos parametros do construtor da nova classe, da erro!
    $c1 = new Caneta("Bic","Azul",0.5);
    // pode ser feito vários objetos diferentes com o construtor
    $c2 = new Caneta("Nic","Vermelho",1.0);
    

    print_r($c1);
    print_r($c2);
 
    
 
    ?>
    </pre>
</body>
</html>