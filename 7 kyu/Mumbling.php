<?php 

    function accum($s) {
        for ($i=0; $i < strlen($s); $i++) {
            $answer .= '-';
            for ($j=0; $j < $i+1; $j++) {
                if ($j == 0) $answer .= strtoupper($s[$i]); else $answer .= strtolower($s[$i]);
            }
        }
        return trim($answer, '-');
    }