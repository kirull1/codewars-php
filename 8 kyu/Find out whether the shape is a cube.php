<?php 

function cubeChecker($volume, $side){
  return $volume != $side**3 || $side <= 0 || $volume <= 0 ? false : true;
}