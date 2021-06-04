<?php 

function automorphic($n) {
  return substr_compare($n**2, $n, strlen($n**2)-strlen($n), strlen($n)) === 0 ? "Automorphic" : "Not!!";
}