<?php 

function duplicate_encode($word){
    $result = "";
    $word = str_split(strtolower($word));
    $char_count = array_count_values($word);

    foreach ($word as $char):
        $result .= $char_count[$char] > 1 ? ")" : "(";
    endforeach;
    
    return $result;
}