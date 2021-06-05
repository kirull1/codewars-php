<?php 

function arrayDiff($a, $b) {
  return array_reverse(array_reverse(array_diff($a, $b)));
}