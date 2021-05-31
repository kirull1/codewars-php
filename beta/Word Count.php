<?php

    function countWords(string $str) : int {
        if (!empty($str)) return count(explode(' ', $str)); else return 0;
    }