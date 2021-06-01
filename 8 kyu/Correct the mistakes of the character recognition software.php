<?php 

function correct($string) {
  return str_replace(['0', '1', '5'], ['O', 'I', 'S'], $string);
}