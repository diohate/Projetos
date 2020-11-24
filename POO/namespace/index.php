<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad =new Cadastro();

$cad->setNome("Diogo Lopes");
$cad->setEmail("diogo@teste.com.br");
$cad->setSenha("123456");

$cad->registraVenda();

?>