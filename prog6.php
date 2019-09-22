<?php

$num = 5000;
function teste_escopo()
{

    global $num;
    $num += 500;

    echo $num . "<br>";
}

for ($num = 1000; $num <= 1001; $num++)

    echo $num . "<br>";
teste_escopo();
