<?php 

function calc($s) {
  return array_sum(str_split(join(array_map('ord',str_split($s)))))-array_sum(str_split(str_replace('7','1',join(array_map('ord',str_split($s))))));
}