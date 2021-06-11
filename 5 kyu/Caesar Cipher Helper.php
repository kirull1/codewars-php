<?php

    class CaesarCipher {        
        public function __construct($of){
            $this->of = $of;
            $this->lets = range('a', 'z');
        }
        public function encode($word){
            $result = ''; $word = strtolower($word);
            for ($i=0; $i < strlen($word); $i++) { 
                $posit = array_search($word[$i],$this->lets);
                if($posit !== false){
                    $pos = array_search($word[$i],$this->lets) + $this->of;
                    $result .= strtoupper($this->lets[$pos > 25 ? $pos - 26 : $pos]);
                }else $result .= $word[$i];
            }
            return $result;
        }
        public function decode($word){
            $result = ''; $word = strtolower($word);
            for ($i=0; $i < strlen($word); $i++) { 
                $posit = array_search($word[$i],$this->lets);
                if($posit !== false){
                    $pos = array_search($word[$i],$this->lets) - $this->of;
                    $result .= strtoupper($this->lets[$pos < 0 ? $pos + 26 : $pos]);
                }else $result .= $word[$i];
            }
            return $result;
        }
    }

    $caesar = new CaesarCipher(5);
    echo $caesar->decode('Htijbfwx');