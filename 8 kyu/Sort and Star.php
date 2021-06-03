<?php 

function twoSort($s) {
  sort($s);
  return join(str_split($s[0]), '***');
}