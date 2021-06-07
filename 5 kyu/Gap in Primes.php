<?php 

function gap($gap, $start, $end) {
    if ($gap==1) return $start<2 || $end > $gap+2 ? (isPrime($gap+2) ? [2, $gap+2] : null) : null;
    for ($corr = $start|1; $corr <= $end; $corr += 2) {
      if (isPrime($corr)) {
        if ($corr-$prev == $gap) return [$prev, $corr];
        $prev = $corr;
      }
    }
    return null;
  }

  function isPrime($n) {
    for($t=5; $t<=floor(sqrt($n)); $t+=6) if ($n%$t==0 || $n%($t+2)==0) return false;
    return $n&1==0 || $n%3==0 ? false : true;
  }