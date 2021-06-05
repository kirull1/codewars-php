<?php 

function count_smileys($arr){
  foreach($arr as $value) if(in_array($value, [':)', ':D', ';-D', ':~)', ';~D', ':D', ':-D', ';D', ':-)', ';~)'])) $count++;
  return !empty($arr) ? $count : 0;
}