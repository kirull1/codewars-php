<?php 

function smallEnough($a, $limit){
  return max($a) > $limit ? false : true;
}