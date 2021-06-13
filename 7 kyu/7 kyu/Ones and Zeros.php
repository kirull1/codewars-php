<?php 

function binaryArrayToNumber($arr) {
  return bindec(implode($arr));
}