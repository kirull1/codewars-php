<?php

    $arr = [
        1 => 'I',
        5 => 'V',
        10 => 'X',
        50 => 'L',
        100 => 'C',
        500 => 'D',
        1000 => 'M'
    ];

    function solution($numbers){
        for ($i=strlen($numbers)-1; $i >= 0; $i--) { 
            $number = strrev(strval($numbers))[$i].str_repeat(0, $i);
            while($number) {
                if(intval($number) === 0) break;
                if($number%1000==0){
                    $num[] = 'M';
                    $number -= 1000;
                }elseif($number%900==0){
                    $num[] = 'CM';
                    $number -= 900;
                }elseif($number%800==0){
                    $num[] = 'DCCC';
                    $number -= 800;
                }elseif($number%700==0){
                    $num[] = 'DCC';
                    $number -= 700;
                }elseif($number%600==0){
                    $num[] = 'DC';
                    $number -= 600;
                }elseif($number%500==0){
                    $num[] = 'D';
                    $number -= 500;
                }elseif($number%400==0){
                    $num[] = 'CD';
                    $number -= 400;
                }elseif($number%100==0){
                    $num[] = 'C';
                    $number -= 100;
                }elseif($number%90==0){
                    $num[] = 'XC';
                    $number -= 90;
                }elseif($number%80==0){
                    $num[] = 'LXXX';
                    $number -= 80;
                }elseif($number%70==0){
                    $num[] = 'LXX';
                    $number -= 70;
                }elseif($number%60==0){
                    $num[] = 'LX';
                    $number -= 60;
                }elseif($number%50==0){
                    $num[] = 'L';
                    $number -= 50;
                }elseif($number%40==0){
                    $num[] = 'XL';
                    $number -= 40;
                }elseif($number%10==0){
                    $num[] = 'X';
                    $number -= 10;
                }elseif($number%9==0){
                    $num[] = 'IX';
                    $number -= 9;
                }elseif($number%8==0){
                    $num[] = 'VIII';
                    $number -= 8;
                }elseif($number%7==0){
                    $num[] = 'VII';
                    $number -= 7;
                }elseif($number%6==0){
                    $num[] = 'VI';
                    $number -= 6;
                }elseif($number%5==0){
                    $num[] = 'V';
                    $number -= 5;
                }elseif($number%4==0){
                    $num[] = 'IV';
                    $number -= 4;
                }else{
                    $num[] = 'I';
                    $number -= 1;
                }
            }
        }
        return implode('',$num);
    }

    print_r(solution(2008));