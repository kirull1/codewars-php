<?php 

function how_much_i_love_you($n){
  while($n>=7) $n -= 6;
  return ['I love you','a little','a lot','passionately','madly','not at all'][$n-1];
}