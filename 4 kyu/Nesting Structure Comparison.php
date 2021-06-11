<?php

    function recursia($arr){
        $result = [];
        foreach($arr as $val){
            if(is_array($val)){
                $result[] = recursia($val);
            }else{
                $result[] = 1;
            }
        }
        return $result;
    }

    function same_structure_as(array $a, array $b): bool{
        return recursia($a) == recursia($b);
    }

    // OR 

    function recursia2($e){
        return array_map(function($e){return is_array($e) ? recursia($e) : 1;}, $e);
    }
    
    function same_structure_as2(array $a, array $b): bool{
      return recursia($a) == recursia($b);
    }

    print_r(same_structure_as([1, [2, 1]], [1, [6, 3]]));