<?php 

class Pessoa {

    public $nome;//Atributo

    public function falar(){//Método
        return "O meu nome é ".$this->nome;
    }
}

$diogo = new Pessoa();
$diogo->nome = "Diogo Lopes";
echo $diogo->falar();

?>