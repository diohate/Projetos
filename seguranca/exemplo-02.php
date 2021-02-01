<?php 

$id = (isset($_GET["id"]))?$_GET["id"]:2;

if (!is_numeric($id) || strlen($id) > 5) {

    exit("Pegamos Você!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_ususarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {

    var_dump($resultado);
}

?>