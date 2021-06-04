<?php 

function solution($val){
  $val = str_replace('.','',strval($val / 10**4));
  return $val ? "Value is $val" : "Value is 00000" ;
};