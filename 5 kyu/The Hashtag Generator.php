<?php

    function generateHashtag($str) {
        $str = join(array_map('ucfirst', explode(' ', trim($str))));
        return $str && strlen($str) < 140 ? "#$str" : false;
    }