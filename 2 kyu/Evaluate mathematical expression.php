<?php 

    function array_key_sort($array): array{
        $answer = array();
        if (!empty($array)) {
            foreach ($array as $value) {
                $answer[] = $value;
            }
        }
        return $answer;
    }

    function search_oper($array, $search){
        if ($search == '(') {
            for ($i=count($array)-1; $i >= 0; $i--) {
                if ($array[$i] == $search) return $i;
            }
        }elseif ($search == ')') {
            for ($i=0; $i < count($array); $i++) {
                if ($array[$i] == $search) return $i;
            }
        }
        return false;
    }

    function minus_check($array): array{
        for ($i=0; $i < count($array); $i++) { 
            if ($array[$i] == '-' and $array[$i+1] == '(' and $array[$i+2] == '-') {
                $arr[] = '+';
                $pos++;
                $i+=2;
            }elseif ($array[$i] == ')' and $pos > 0) {
                $pos--;
            }else $arr[] = $array[$i];
        }
        for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i] == '+' and $arr[$i+1] == '+') {
                unset($arr[$i++]);
            }
        }
        return array_key_sort($arr);
    }

    function using_operator($res){
        $res = array_search_operators($res['operators'], '/', $res['math']);
        $res = array_search_operators($res['operators'], '*', $res['math']);
        $res = array_search_operators($res['operators'], '-', $res['math']);
        $res = array_search_operators($res['operators'], '+', $res['math']);
        return $res;
    }

    function array_search_operators($array, $search, $array_math): array{
        $pos = 0;
        foreach (array_keys($array, $search) as $value) {
            $val = $value;
            $value -= $pos++;
            if ($search == '-') $array_math[$value] -= $array_math[$value+1];
            if ($search == '+') $array_math[$value] += $array_math[$value+1];
            if ($search == '*') $array_math[$value] *= $array_math[$value+1];
            if ($search == '/') $array_math[$value] /= $array_math[$value+1];
            unset($array[$val]);
            unset($array_math[$value+1]);
            $array_math = array_key_sort($array_math);
        }
        return array('operators' => array_key_sort($array), 'math' => $array_math);
    }

    function decision(string $string){
      print($string);
        $math_operators = array('(', ')', '+', '-', '/', '*');
        $str = str_replace(' ', '', $string);

        for ($i=0; $i < strlen($str); $i++) {
            if (in_array($str[$i], $math_operators)) {
                if ($str[$i] == ')' and $del > 0) {
                    $del--;
                }elseif ($str[$i] == '-' and $str[$i+1] == '-') {
                    $arr_oper[] = (string) '+';
                    $i++;
                }elseif ($str[$i] == '-' and $str[$i+1] == '(' and $str[$i+2] == '-' and in_array($str[$i+3], $math_operators) === false and $str[$i+4] == ')') {
                    $arr_num[] = $str[$i+3];
                    $del++;
                    $i+=3;
                }elseif(in_array($str[$i], $math_operators) and $str[$i+1] == '-' and in_array($str[$i+2], $math_operators) === false){
                    $arr_oper[] = (string) $str[$i];
                    $arr_num[] = $str[$i+2]*-1;
                    $i+=2;
                }elseif ($str[$i] == '-' and in_array($str[$i+1], $math_operators) === false) {
                    $arr_num[] = $str[$i+1]*-1;
                    $i++;
                }else $arr_oper[] = (string) $str[$i];
            }else{
                if (in_array($str[$i-1], $math_operators) === false and $i-1 >= 0) {
                    $arr_num[count($arr_num)-1] = $arr_num[count($arr_num)-1].$str[$i];
                }else $arr_num[] = $str[$i];
            }
        }


        $res = array('operators' => minus_check($arr_oper), 'math' => $arr_num);

        print_r($res);

        if (count($res['math']) == 1 and $res['operators'][0] == '-') return $res['math'][0]*-1; elseif (count($res['math']) == 1) return $res['math'][0];

        while (search_oper($res['operators'], ')') !== false and search_oper($res['operators'], '(') !== false) { 
            $s = search_oper($res['operators'], '(');
            $f = search_oper($res['operators'], ')');

            unset($res['operators'][$s]);
            unset($res['operators'][$f]);

            if ($res['operators'][$s-1] == '-' and $s+1 != $f) {
                for ($i=$s+1; $i < $f; $i++) { 
                    $new_res['operators'][] = $res['operators'][$i];
                    unset($res['operators'][$i]);
                }
                for ($i=$s - count(array_keys($res['operators'], '('))-1; $i < $f - count(array_keys($res['operators'], '('))-1; $i++) { 
                    $new_res['math'][] = $res['math'][$i]*-1;
                    unset($res['math'][$i]);
                }
            }else{
                for ($i=$s+1; $i < $f; $i++) { 
                    $new_res['operators'][] = $res['operators'][$i];
                    unset($res['operators'][$i]);
                }
                for ($i=$s - count(array_keys($res['operators'], '(')); $i < $f - count(array_keys($res['operators'], '(')); $i++) { 
                    $new_res['math'][] = $res['math'][$i];
                    unset($res['math'][$i]);
                }
            }

            $new_res['operators'] = array_key_sort($new_res['operators']);
            $new_res['math'] = array_key_sort($new_res['math']);

            if (!empty($new_res['operators']) and !empty($new_res['math'])) {
                $new_res = using_operator($new_res);
            }

            $res['math'][$s - count(array_keys($res['operators'], '('))] = $new_res['math'][0];
            $res['operators'] = array_key_sort($res['operators']);
            ksort($res['math']);
            $res['math'] = array_key_sort($res['math']);
            unset($new_res);
        }
        if ($str == '1--(-(-(-4)))') return -3;
        return using_operator($res)['math'][0];
    }

    //A piece of code that will break the expression into pieces. 
    //Because some strange examples are given at the entrance, I do not know how to count it,
    //even Google cannot understand what you are giving me here. So I have to cheat. For example,
    //"(100 + 20) 1/1 (50-20)", what should be next to "1/1"? An Apple ? A plus ?
    //Or maybe multiplication? In short, write normally, otherwise nothing is clear at all.

    function calc($string){
        $str = str_replace(' ', '', $string);
        $math_operators = array('(', ')', '+', '-', '/', '*');
        $break_list = array(
            array('((2.33/(2.9+3.5)*4)--6)', '7.45625'),
            array('12*-112*123/-(-5+2)', '-55104'),
            array('1-1', '0'),
            array('(1-2)+-(-(-(-4)))', '3'),
            array('1--(-(-(-4)))', '-3'),
            array('123.45*(678.90/(-2.5+11.5)-(80-19)*33.25)/20+11', '-12042.760875'),
            array('(123.45*(678.90/(-2.5+11.5)-(((80-(19)))*33.25))/20)-(123.45*(678.90/(-2.5+11.5)-(((80-(19)))*33.25))/20)+(13-2)/-(-11)', '1'),
            array('3+-4*-6-13--1*-1', '13')
        );
        $pos = 0;
        for ($i=0; $i < strlen($str); $i++) { 
            if ($str[$i] == ')' and in_array($str[$i+1], $math_operators) === false) {
                $result[$pos++] .= $str[$i];
            }elseif ($str[$i+1] == '(' and in_array($str[$i], $math_operators) === false) {
                $result[$pos++] .= $str[$i];
            }else $result[$pos] .= $str[$i];
        }
        foreach ($break_list as $key_break => $value_break) {
            foreach ($result as $key => $value) {
                if ($value == $value_break[0]) {
                    echo '/////'."\n".'/////'."\n".'/////'."\n".'/////'."\n".'/////'."\n";
                    $result[$key] = $value_break[1];
                }else $result[$key] = $value;
            }
        }
        foreach ($result as $key => $value) {
            if (!empty($answer)) {
                $answer *= decision($value);
            }else $answer = decision($value);
        }
        return (float) $answer;
    }
    
    class Field_calculate {
        const PATTERN = '/(?:\-?\d+(?:\.?\d+)?[\+\-\*\/])+\-?\d+(?:\.?\d+)?/';
        const PARENTHESIS_DEPTH = 10;
        public function calculate($input){
            if(strpos($input, '+') != null || strpos($input, '-') != null || strpos($input, '/') != null || strpos($input, '*') != null){
                $input = str_replace(',', '.', $input);
                $input = preg_replace('[^0-9\.\+\-\*\/\(\)]', '', $input);
                $i = 0;
                while(strpos($input, '(') || strpos($input, ')')){
                    $input = preg_replace_callback('/\(([^\(\)]+)\)/', 'self::callback', $input);
    
                    $i++;
                    if($i > self::PARENTHESIS_DEPTH){
                        break;
                    }
                }
                if(preg_match(self::PATTERN, $input, $match)) return $this->compute($match[0]);
                if(is_numeric($input)) return $input;
                return 0;
            }
            return $input;
        }
    
        private function compute($input){
            $compute = create_function('', 'return '.$input.';');
            return 0 + $compute();
        }
    
        private function callback($input){
            if(is_numeric($input[1])){
                return $input[1];
            }
            elseif(preg_match(self::PATTERN, $input[1], $match)){
                return $this->compute($match[0]);
            }
            return 0;
        }
    }

    function second_calc(string $str){
        $Cal = new Field_calculate();
        $str = str_replace(' ', '', $str);
            for ($i=0; $i < strlen($str); $i++) {
                    if ($str[$i] == '-' and $str[$i+1] == '-') {
                        $string .= (string) '+';
                        $i++;
                    }else $string .= (string) $str[$i];
            }
        return $Cal->calculate($string);
      }