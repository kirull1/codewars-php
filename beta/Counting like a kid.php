<?php

    function kidoCount($n) {
        return array_values(array_filter(range(0, $n), function($e){return $e & 1;}));
    }

