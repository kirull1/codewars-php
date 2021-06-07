<?php 

function productFib($prod) {
      $n2 = 1;
      while($n1 * $n2 < $prod){
          $oldnum = $n1 + $n2;
          $n1 = $n2;
          $n2 = $oldnum;
      }
      return $n1*$n2 == $prod ? [$n1, $n2, true] : [$n1, $n2, false];
  }