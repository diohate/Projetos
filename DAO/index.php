<?php

require_once("config.php");

//Faz o Select de ususario por ID

$diogo = new usuario();

$diogo->loadById(3);

echo $diogo;

//Faz o Select print em json
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

?>