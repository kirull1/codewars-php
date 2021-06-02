<?php 

function smallestInteger ($arr) {
  sort($arr);
  return $arr[0];
}