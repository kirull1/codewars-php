<?php 

function findIt($seq){
  foreach(array_count_values($seq) as $key => $value) if($value % 2 != 0) return $key;
}