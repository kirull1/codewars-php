<?php 

function expanded_form(string $n): string {
  for($i=0;$i<strlen($n);$i++) $n[$i] == 0 ?: $result[] = $n[$i].str_repeat('0', strlen($n)-$i-1);
  return implode($result, ' + ');
}


function expanded_form(string $n): string {
  for($i=0;$i<strlen($n);$i++) $n[$i] == 0 ?: $result .= ' '.$n[$i].str_repeat('0', strlen($n)-$i-1).' +';
  return trim(rtrim($result,'+'));
}