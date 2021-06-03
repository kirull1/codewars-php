<?php 

function calculator($a, $b, $sign) {
  return !in_array($sign, ['*', '/', '+', '-']) || is_string($b) || is_string($a) ? 'unknown value' : eval("return $a$sign$b;");
}