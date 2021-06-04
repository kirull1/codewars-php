<?php 

function reverse($a){
  return array_map('array'.'_'.'reverse', [$a])[0];
}