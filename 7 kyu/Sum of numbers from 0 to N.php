<?php 

class SequenceSum {
  public function showSequence($count) {
        if ($count < 0) {
            $strs .= $count;
            $strs .= '<0';
            return $strs;
        }
        if ($count == 0) {
            $str .= $count;
            $str .= '=0';
            return $str;
        }
        for ($i=0; $i <= $count; $i++) { 
            if ($i == 0) {
                $str .= $i;
            }
            if ($i > 0) {
                $str .= '+'.$i;
            }
            $a = $a + $i;
        }
        if ($a >= 0) {
            $str .= ' = '.$a;
            return $str;
        }
  }
}