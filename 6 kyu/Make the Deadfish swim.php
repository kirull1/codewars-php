<?php 

function parse($data) {
  $result = 0;
    for ($i=0; $i < strlen($data); $i++) { 
        if ($data[$i] == 'i') {
            $result++;
        }elseif ($data[$i] == 'd') {
            $result--;
        }elseif ($data[$i] == 's') {
            $result = $result**2;
        }elseif ($data[$i] == 'o') {
            $ret[] = $result;
        }
    }
    return $ret ?: array();
}