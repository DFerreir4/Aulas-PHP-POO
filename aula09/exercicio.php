<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - POO </title>
</head>
<body>
    <pre>
        <h1>Livrinho</h1>
    <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $p[0] = new Pessoa("Pedro",22,"M");
        $p[1] = new Pessoa("Maria",31,"F");

        $l[0] = new Livro("PHP BASICO","José da Silva",300, $p[0]);
        $l[1] = new Livro("POO COM PHP","Maria de Souza",500,$p[1]);
        $l[2] = new Livro("PHP avançado", "Ana Paula",800,$p[1]);

       // print_r($l[0]);

        $l[0]->folhear(80);
        $l[0]->voltarPag();
        $l[0]->abrir();
        $l[0]->detalhes();




 
                    
   
   ?>
    </pre>
</body>
</html>