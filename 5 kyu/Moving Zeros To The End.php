<?php 

function moveZeros(array $items): array{
    if (!empty($items)) {
        foreach ($items as $value) {
            if (is_int($value) === true || is_float($value) === true) {
                if ($value === 0 || $value === 0.0) {
                    $s++;
                }else $r[] = $value;
            }
            else $r[] = $value;
        }
        for ($i=0; $i < $s; $i++) $r[] = 0;
        return $r;
    }else return array();
}