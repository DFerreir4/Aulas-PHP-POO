<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{

//Atributos
private $matr;
private $curso;


//Metodos especiais

/*public function __construct($matr,$curso)
{
    $this->matr = $matr;
    $this->curso = $curso;
}*/

public function getMatr(){
    return $this->matr;
}

public function setMatr($matr){
    $this->matr = $matr;
}

public function getCurso(){
    return $this->curso;
}

public function setCurso($curso){
    $this->curso = $curso;
}


//Metodos

public function cancelarMatr(){
    echo "<p>Matricula será cancelada!</p>";

}







}





?>