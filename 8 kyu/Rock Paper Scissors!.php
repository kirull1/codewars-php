<?php 

function rpc ($p1, $p2) {
  if ($p1 == $p2) return "Draw!";
  return "Player ".mt_rand(1,2)." won!";
}