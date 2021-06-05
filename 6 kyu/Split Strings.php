<?php 

function solution($str) {
  for($i=0;$i<strlen($str)+1;$i++){
    if($i % 2 != 0){
      if(strlen($str) == $i) $res[$i-1] .= '_';
      $res[$i-1] .= $str[$i];
    }else $res[$i] = $str[$i];
  }
  foreach($res as $value) $ret[] = $value;
  return array_diff($ret, array(''));
}


JavaScript:
function solution(str){
  if(!str) return [];
    sym = str.split('');
    res = [];
    p = 0;
    sym.forEach((el) => {
      if(p++%2==0){
        res.push(el);
      }else res[res.length-1] += el;
    })
    if(res[res.length-1].length == 1){
      res[res.length-1] += '_';
    }
    return res;
}