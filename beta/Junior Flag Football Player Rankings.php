<?php

    function rankPlayers($players) {    
        if (empty($players)) return [];
        foreach ($players as $key => $value) {
            foreach ($value as $value_end) {
                $res[$key] = $res[$key] + $value_end;
            }
            $res[$key] = $res[$key] / 3;
            $res[$key] = round($res[$key], 2);
        }
        arsort($res);
        return $res;
    }