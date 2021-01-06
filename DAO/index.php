<?php

require_once("config.php");

//Carrega um usuário usando o login e a senha

$usuario = new usuario();

$usuario->login("root","!@#$");

echo $usuario;


//Carrega uma lista de usuários buscando pelo login
//$search = usuario::serach("di");
//echo json_encode($search);

//Carrega uam lista de usuários
//$lista = usuario::getList();
//echo json_encode($lista);

//Faz o Select de usuario por ID
//$diogo = new usuario();
//$diogo->loadById(3);
//echo $diogo;

//Faz o Select print em json
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

?>