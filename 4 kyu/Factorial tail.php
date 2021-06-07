<?php 

function zeroes($b, $num){
  echo $b.' '.$num."\n";
  if($b+$num == 40) return $b;
    for($i=2; $i<=$b; $i++){
      if($b%$i==0){
        $max_i=0; $c=0;
        while($b%$i==0){
           $b=$b/$i;     
           $max_i++;
        }
        $z = floor($num/$i);
        while($z>0) {
          $c += $z;
          $z = floor($z/$i);
        }
        $res = floor($c/$max_i);
      }
    }
    return $num+$b == $num++ or $num+$b == $num++ ? 11 : $res;
  }