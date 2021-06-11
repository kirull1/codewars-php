<?php
    class game{

        private $illustration = ['0', '1'];

        public function __construct($map = null){
            $this->map = $map;
        }

        private function check_map(){
            if($this->map)
                return true;
            else
                throw new Exception("Error! The map value is not specified.");
        }

        public function generate($size, $p){
            for ($i=0; $i < $size; $i++)
                for ($j=0; $j < $size; $j++) 
                    $matrix[$i][$j] = rand(0, 100) <= $p ? $this->illustration[1] : $this->illustration[0];

            $this->map = $matrix;
        }

        public function build_map($size, $elm, $indent = [1, 1]){
            $max = count($elm);
            for ($i=0; $i < $size; $i++)
                for ($j=0; $j < $size; $j++) 
                    $matrix[$i][$j] = $indent[0] <= $i && $indent[1] <= $j && $i - $indent[0] < $i && $j - $indent[1] < $j && $max + $indent[0] > $i && $max + $indent[1] > $j ? $elm[$i - $indent[0]][$j - $indent[1]] : $this->illustration[0];

            $this->map = $matrix;
        }

        public function compile($indent = 0){
            $this->check_map();
            $size = count($this->map) - $indent;
            $string = [];
            for ($i=$indent; $i < $size; $i++) { 
                for ($j=$indent; $j < $size; $j++) $string[$i][$j] = (int) $this->map[$i][$j];
            }
            return array_values(array_map('array_values',$string));
        }

        private function status($date){
            $count = 0;
            $max = count($this->map);
            for($i = -1; $i < 2; $i++)
                for($j = -1; $j < 2; $j++)
                    if(($i != 0 || $j != 0) && $max > $date[0] + $i && $max > $date[1] + $j && 0 <= $date[0] + $i && 0 <= $date[1] + $j)
                        $count += $this->map[$date[0]+$i][$date[1]+$j] == $this->illustration[1] ? 1 : 0;

            return $count < 2 || $count > 3 ? 1 : $count;
        }

        private function offset_map(){
            $size = count($this->map);
            for ($i=0; $i < $size; $i++)
                for ($j=0; $j < $size; $j++)
                    $this->map[$i][$j] = str_replace('2', $this->illustration[1], $this->map[$i][$j]);
        }

        public function update_map(){
            $this->check_life();
            $this->check_life(1);
            $this->offset_map();
        }

        private function check_life($type = null){
            $size = count($this->map);
            $map = $this->map;
            for ($i=0; $i < $size; $i++)
                for ($j=0; $j < $size; $j++)
                    if ($type === 1) 
                        if($this->map[$i][$j] == $this->illustration[0]) $map[$i][$j] = $this->status([$i, $j]) < 3 ? $this->illustration[0] : 2;
                    else 
                        if($this->map[$i][$j] == $this->illustration[1]) $map[$i][$j] = $this->status([$i, $j]) == 1 ? $this->illustration[0] : 2;

            $this->map = $map;
        }
      
      public function cropped($cells){
        $leftmost = count($cells[0]);
        $uppermost = count($cells); 
        $lowermost = $rightmost = 0;
        for ($i = 0; $i < count($cells); $i++)
            for ($j = 0; $j < count($cells[$i]); $j++)
                if ($cells[$i][$j] == 1){
                    if ($i < $uppermost)
                        $uppermost = $i;
                    if ($i > $lowermost)
                        $lowermost = $i;
                    if ($j < $leftmost)
                        $leftmost = $j;
                    if ($j > $rightmost)
                        $rightmost = $j;
                  }
            
        for ($i=0; $i < $lowermost - $uppermost + 1; $i++) for ($j=0; $j < $rightmost-$leftmost+1; $j++) $cropped[$i][$j] = 0;
        for ($i = $uppermost; $i <= $lowermost; $i++) for ($j = $leftmost; $j <= $rightmost; $j++) $cropped[$i - $uppermost][$j-$leftmost] = $cells[$i][$j];
        return $cropped;
      }

    }

    function get_generation($c, $g){
        if(count($c) != count($c[0])) for ($i=0; $i < count($c[0]) - count($c) + 4; $i++) $c[] = str_split(str_repeat('0', count($c[0])));
        $game = new game();
        $game->build_map(68, $c, [10, 10]);
        while($p++ < $g) $game->update_map();
        return $game->cropped($game->compile()) ?: [[]];
    }

    print_r(get_generation([[1, 0, 0],[0, 1, 1],[1, 1, 0]], 1));