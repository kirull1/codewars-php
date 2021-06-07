<?php

    /*
     *
     * https://habr.com/ru/sandbox/94515/
     * 
     */

    function number2words($number) {
        
        $dic = [
            0 => 'zero',
            1	=> 'one',
            2	=> 'two',
            3	=> 'three',
            4	=> 'four',
            5	=> 'five',
            6	=> 'six',
            7	=> 'seven',
            8	=> 'eight',
            9	=> 'nine',
            10	=> 'ten',
            11	=> 'eleven',
            12	=> 'twelve',
            13	=> 'thirteen',
            14	=> 'fourteen',
            15	=> 'fifteen',
            16	=> 'sixteen',
            17	=> 'seventeen',
            18	=> 'eighteen',
            19	=> 'nineteen',
            20	=> 'twenty-',
            30	=> 'thirty-',
            40	=> 'forty-',
            50	=> 'fifty-',
            60	=> 'sixty-',
            70	=> 'seventy-',
            80	=> 'eighty-',
            90	=> 'ninety-',
            100	=> 'one hundred',
            200	=> 'two hundred',
            300	=> 'three hundred',
            400	=> 'four hundred',
            500	=> 'five hundred',
            600	=> 'six hundred',
            700	=> 'seven hundred',
            800	=> 'eight hundred',
            900	=> 'nine hundred'
        ];
        
        $string = array();
        foreach(array_reverse(str_split(str_pad($number, ceil(strlen($number)/3)*3, 0, STR_PAD_LEFT),3)) as $i=>$part) {
            if($part>0) {
                $digits = array();
                if($part>99) $digits[] = floor($part/100)*100;

                if($mod1=$part%100) {
                    $mod2 = $part%10;
                    $flag = $mod1!=11 && $mod1!=12 && $mod2<3 ? -1 : 1;
                    if($mod1<20 || !$mod2)
                        $digits[] = $flag*$mod1;
                    else {
                        $digits[] = floor($mod1/10)*10;
                        $digits[] = $flag*$mod2;
                    }
                }
                                
                foreach($digits as $j=>$digit) $digits[$j] = $digit < 0 ? str_replace('-', '', $dic[abs($digit)]) : $dic[$digit];
                
                $digits[] = $i != 1 ?: 'thousand';
                
                array_unshift($string, join(' ', $digits));
            }
        }
            
        return $number == 0 ? $dic[0] : trim(str_replace('- ', '-', join(' ', $string)), '1- ');
    }

    print_r(number2words(830764));