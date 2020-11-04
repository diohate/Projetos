<?php

function ola($texto="mundo", $periodo="Bom dia"){

    return "Olá $texto! $periodo! <br />";
}

echo ola();
echo ola("","Boa Noite");
echo ola("Diogo","Boa Tarde");
echo ola("Priscila","");

?>