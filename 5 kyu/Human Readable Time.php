<?php

    function human_readable($s) {
        $d = explode('.', date('j.H.i:s', $s));
        $h = ($d[0] - 1) * 24 + $d[1];
        return (strlen($h) == 1 ? '0' . $h : $h) . ':' . $d[2];
    }