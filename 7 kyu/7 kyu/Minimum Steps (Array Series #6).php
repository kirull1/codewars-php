<?php 

function minimumSteps($nums, $value) {
  sort($nums);
  foreach($nums as $val){
    $res += $val;
    if($res >= $value){
      return min($nums) >= $value ? 0 : $p++;
    }
    $p++;
  }
}