<?php 

    function validate_battlefield(array $field, $list = []){
        foreach ($field as $keys => $value) {
            foreach ($value as $key => $value) {
                if ($value == 1) {
                    $pos = [$keys, $key];
                    $res[] = check_korable($pos, $field, $list);
                }
            }
        }
        foreach (array_diff($res, array('')) as $value) $rest[] = $value[0]; 
        foreach (array_count_values($rest) as $key => $value) {
            $key == 'battleship' and $value == 1 ? $res[0] = true : $res[0] = false;
            $key == 'destroyers' and $value == 3 ? $res[1] = true : $res[1] = false;
            $key == 'cruisers' and $value == 2 ? $res[2] = true : $res[2] = false;
            $key == 'submarines' and $value == 4 ? $res[3] = true : $res[3] = false;
        }

        return $res[0] === true && $res[1] === true && $res[2] === true && $res[3] === true ? true : false;
    }
    function check_korable(array $p, array $f, &$list){
        if (array_search($p[0].$p[1], $list) === false) {
            $list[] = $p[0].$p[1];
            $list[] = ($p[0]+1).$p[1];
            $list[] = $p[0].($p[1]+1);
            $list[] = $p[0].($p[1]-1);
            $list[] = ($p[0]-1).$p[1];
            $list[] = ($p[0]+1).$p[1]+1;
            $list[] = ($p[0]-1).($p[1]+1);
            $list[] = ($p[0]+1).($p[1]-1);
            $list[] = ($p[0]-1).$p[1]+1;
            if ($f[$p[0]+1][$p[1]] == 1) {
                $t = '1';
            }elseif ($f[$p[0]][$p[1]+1] == 1) {
                $t = '2';
            }elseif ($f[$p[0]][$p[1]-1] == 1) {
                $t = '3';
            }elseif ($f[$p[0]-1][$p[1]] == 1) {
                $t = '4';
            }else $res[] = 'submarines';

            if (empty($res)) {
                if ($t == 1) {
                    if ($f[$p[0]+2][$p[1]] == 1 and $f[$p[0]+3][$p[1]] == 1) {
                        $list[] = ($p[0]+2).$p[1];
                        $list[] = ($p[0]+3).$p[1];
                        $res[] = 'battleship';
                    }elseif($f[$p[0]+2][$p[1]] == 1){
                        $list[] = ($p[0]+2).$p[1];
                        $res[] = 'cruisers';
                    }else $res[] = 'destroyers';
                }elseif ($t == 2) {
                    if ($f[$p[0]][$p[1]+2] == 1 and $f[$p[0]][$p[1]+3] == 1) {
                        $list[] = $p[0].($p[1]+3);
                        $list[] = $p[0].($p[1]+2);
                        $res[] = 'battleship';
                    }elseif($f[$p[0]][$p[1]+2] == 1){
                        $list[] = $p[0].($p[1]+2);
                        $res[] = 'cruisers';
                    }else $res[] = 'destroyers';
                }
                elseif ($t == 3) {
                    if ($f[$p[0]][$p[1]-2] == 1 and $f[$p[0]][$p[1]-3] == 1) {
                        $list[] = $p[0].($p[1]-3);
                        $list[] = $p[0].($p[1]-2);
                        $res[] = 'battleship';
                    }elseif($f[$p[0]][$p[1]-2] == 1){
                        $list[] = $p[0].($p[1]-2);
                        $res[] = 'cruisers';
                    }else $res[] = 'destroyers';
                }elseif ($t == 4) {
                    if ($f[$p[0]-2][$p[1]] == 1 and $f[$p[0]-3][$p[1]] == 1) {
                        $list[] = ($p[0]-3).$p[1];
                        $list[] = ($p[0]-2).$p[1];
                        $res[] = 'battleship';
                    }elseif($f[$p[0]-2][$p[1]] == 1){
                        $list[] = ($p[0]-2).$p[1];
                        $res[] = 'cruisers';
                    }else $res[] = 'destroyers';
                }
            }
        }

        return $res;
    }