<?php 

function pipeFix($numbers) {
  return range($numbers[0], $numbers[count($numbers)-1]);
}