<?php 

for ($i=0; $i < 10; $i++) { 
    
    echo $i . "<br />";
}
//contando de 0 até 9 pulando linha.

echo "<br />";

for ($i=0; $i < 50; $i+=5) { 

    echo $i . "<br />";
}
//contando de 0 até 50, pulando de 5 em 5.

echo "<br />";

for ($i=0; $i <100 ; $i+=5) { 
    
    if ($i >= 20 && $i <= 80) continue;

    if ($i === 90) break;

    echo $i . "<br />";
}
//contando de 0 até 100 pulando de 5 em 5, e pulando do 20 até 80 e parando em 90.
?>