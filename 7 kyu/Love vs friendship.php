<?php 

function wordsToMarks(string $str): int {
  return array_sum(array_map('ord',str_split($str)))-strlen($str)*96;
}