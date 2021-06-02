<?php 

function betterThanAverage($classPoints, $yourPoints) {
  return array_sum($classPoints)/count($classPoints) < $yourPoints;
}