<?php 

function specialNumber($n) {
  return strlen(str_replace(range(0,5), '', $n)) == 0 ? "Special!!" : "NOT!!";
}