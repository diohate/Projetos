<?php 

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Diogo',
    'Idade'=>'33'
));

array_push($pessoas, array(
    'nome'=>'Priscila',
    'Idade'=>'27'
));

echo json_encode($pessoas);


?>