<?php 

function maps($x)
{
    for ($i=0; $i < count($x); $i++) { 
        $x[$i] = $x[$i] * 2;
     }

    return $x;
}