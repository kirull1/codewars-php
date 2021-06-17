<?php

    function get_strings($city) {
        foreach(array_count_values(str_split(strtolower(str_replace(' ','',$city)))) as $key => $val) $result .= $key . ':' . str_repeat('*', $val) . ',';
        return trim($result, ',');
    }