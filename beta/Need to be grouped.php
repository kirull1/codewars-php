<?php

    function grouped($text){
        for($i=0;$i<=strlen($text);$i++){
        if($text[$i] != $text[$i-1]){
            $res[] = $text[$i-1] == "\n" ? $p . $text[$i-2] : $p . $text[$i-1];
            $p = 1;
        }else $p++;
        if($text[$i] == "\n"){
            $res[] = '\n'; 
            $p = 0;
        }
        }
        return str_replace(', \n, ', "\n", trim(implode(', ', array_diff(array_map(function($e){return strlen(trim($e, '0 ')) == 1 ? '' : $e;},$res), [''])), ', '));
    }

