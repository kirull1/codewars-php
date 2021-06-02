<?php 

function arr($n = 0): array{
  return empty($n) || $n == 0 ? [] : range(0, $n-1);
}