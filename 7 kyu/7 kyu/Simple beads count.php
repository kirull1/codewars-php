<?php 

function count_red_beads(int $n): int {
  return ($n<2) ? 0 : ($n-1)*2;
}