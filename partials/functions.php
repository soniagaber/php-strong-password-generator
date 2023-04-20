<?php

function generaPass($n)
{
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-+!%$&£=^/*°@§#;:_';
    $pass = '';

    for ($i = 0; $i < $n; $i++) {
        $indice = rand(0, strlen($caratteri) - 1);
        $pass .= $caratteri[$indice];
    }

    return $pass;
}

?>