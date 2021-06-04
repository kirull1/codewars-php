<?php 

function bump($x) {
  return array_count_values(str_split($x))['n'] > 15 ? "Car Dead" : "Woohoo!";
}