<?php 

    function permutations(string $s): array{
        if (!empty($s)) {
            $result = array();
            for ($i=0; $i < strlen($s); $i++) { 
                $array[] = $s[$i];
            }
            recursia($array, '', $result);
            foreach (array_unique($result) as $value) {
                if (strlen($value) == strlen($s)) {
                    $arr[] = $value;
                }
            }
            return $arr;
        }else return array('');
    }

    function recursia($arr, $string, &$result){ 
         if (!empty($string)) $result[] = $string; 

         for ($i = 0; $i < count($arr); $i++) { 
            $arrc = $arr;
            $elem = array_splice($arrc, $i, 1);

            if (count($arrc) > 0) { 
                recursia($arrc, $string.$elem[0], $result); 
            }else $result[] = $string.$elem[0]; 
        } 
    }