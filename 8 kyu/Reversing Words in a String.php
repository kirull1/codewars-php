<?php 

function reverse($str) {
  return join(' ',array_reverse(explode(' ', $str)));
}