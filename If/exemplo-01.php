<?php 

$quaASuaIdade = 19;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($quaASuaIdade < $idadeCrianca) {

    echo "Criança";

} elseif ($quaASuaIdade < $idadeMaior){

    echo "Adolecente";

} elseif ($quaASuaIdade < $idadeMelhor) {
    
    echo "Adulto";

} else {
    
    echo "Idoso";

}

echo "<br />";

echo ($quaASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>