<?php 

function toNumberArray(array $stringArray) : array {
  return array_map('floatval', $stringArray);
}