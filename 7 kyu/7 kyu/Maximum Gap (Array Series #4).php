<?php 

function maxGap($nums) {
  sort($nums);
  for($i=0;$i<count($nums)-1;$i++) $res[] = $nums[$i+1] - $nums[$i];
  return max($res);
}