<?php 

function DNA_strand($dna) {
  foreach(str_split($dna) as $val){
    if($val == "A") $str .= "T";
    if($val == "T") $str .= "A";
    if($val == "C") $str .= "G";
    if($val == "G") $str .= "C";
  }
  return $str;
}