<?php 

function enough($c, $o, $w) {
  return ($o+$w)-$c < 0 ? 0 : ($o+$w)-$c;
}