<?php

    function jumpingNumber(string $n) {
        for($i=0;$i<strlen($n)-1;$i++) if(abs($n[$i] - $n[$i+1]) != 1) return "Not!!";
        return "Jumping!!";
    }