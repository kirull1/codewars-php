<?php 

function generateShape($int) {
  return trim(str_repeat(str_repeat('+', $int)."\n", $int),"\n");
}