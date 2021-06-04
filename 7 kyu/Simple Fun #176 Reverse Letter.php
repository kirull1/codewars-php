<?php 

function reverseLetter($str){
  return strrev(str_replace('/','',preg_replace('%[^a-z/d/]%i','',$str)));
}