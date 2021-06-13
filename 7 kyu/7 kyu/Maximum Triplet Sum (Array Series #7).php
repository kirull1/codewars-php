<?php 

function maxTriSum($nums) {
  $nums = array_unique($nums);
  rsort($nums);
  return $nums[0] + $nums[1] + $nums[2];
}