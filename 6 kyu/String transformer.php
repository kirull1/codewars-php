<?php 

function string_transformer(string $s): string {
  $s = join(' ',array_reverse(explode(' ',$s)));
  return strtolower($s)^strtoupper($s)^$s;
}