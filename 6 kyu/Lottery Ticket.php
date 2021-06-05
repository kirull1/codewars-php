<?php 

function bingo(array $ticket, int $win): string {
  return array_count_values(array_map(function($e){return array_search($e[1],array_map('ord', str_split($e[0]))) !== false ? 1 : 0; },$ticket))[1] >= $win ? 'Winner!' : 'Loser!';
}