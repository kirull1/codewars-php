<?php 

function getMiddle($text) {
  return strlen($text) % 2 == 0 ? $text[floor((strlen($text)-1)/2)].$text[floor((strlen($text)-1)/2)+1] : $text[(strlen($text)-1)/2];
}