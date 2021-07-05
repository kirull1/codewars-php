<?php

    function sortStringsByVowels($str){
        foreach($str as $val){
            $array = explode(' ', preg_replace('|\s+|', ' ', preg_replace('/[^aeiou]/i', ' ', $val)));
            $res[$val] = max(array_map('strlen', $array));
        }
        arsort($res);
        foreach($res as $key => $val){
            $result[] = $key;
        }
        return $result;
    }