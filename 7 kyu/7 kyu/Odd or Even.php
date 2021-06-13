<?php 

function odd_or_even(array $a): string {
        for ($i=0; $i < count($a); $i++) { 
            $num = $num + $a[$i];
        }
        if ($num%2 == 0) {
            return 'even';
        }else return 'odd';
}