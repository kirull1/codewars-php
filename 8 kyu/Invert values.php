<?php 

function invert(array $a): array {
        for ($i=0; $i < count($a); $i++) { 
            $a[$i] = $a[$i] * -1;
        }
        return $a;
}