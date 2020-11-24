<?php 

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registraVenda(){
        echo "Foi resgistrada uma venda para o cliente ".$this->getNome();
    }
}

?>