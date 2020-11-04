<?php 

$json = '[{"nome":"Diogo","Idade":"33"},{"nome":"Priscila","Idade":"27"}]';

$data = json_decode($json, true);

var_dump($data);

?>