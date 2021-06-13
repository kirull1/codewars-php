<?php 

function longest($a, $b) {
        $arr = $a.$b;
        $stringParts = str_split($arr);
        sort($stringParts);
        $stringParts = implode('', $stringParts);
        return join(array_unique(preg_split("//u", $stringParts)));
}


Beta
Vigilante Lists
