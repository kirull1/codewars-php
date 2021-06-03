<?php 

function is_palindrome($line) {
  return $line[0] == $line[strlen($line)-1] ? true : false;
}