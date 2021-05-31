<?php

function updateList($good_guys, $bad_guys, $name, $good) {
        
    for ($i=0; $i < count($good_guys); $i++) { 
        if (is_string($name) != true) {
            return null;
            exit;
        }
        if ($good_guys[$i] == $name AND $good == true) {
            return null;
            exit();
        }elseif ($good_guys[$i] != $name AND $good == true) {
            $good_guys[] = $name;
            return $good_guys;
            exit();
        }
        if ($bad_guys[$i] == $name AND $good == false) {
            return null;
            exit();
        }elseif ($bad_guys[$i] != $name AND $good == false) {
            $bad_guys[] = $name;
            return $bad_guys;
            exit();
        }
        return null;
        exit();
    }

} 