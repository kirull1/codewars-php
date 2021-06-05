<?php 

function createPhoneNumber($num) {
  $res .= '(';
  foreach($num as $key => $value){
    if($key < 1){
      $res .= $value;
    }elseif($key == 2){
      $res .= $value.') ';
    }elseif($key < 5){
      $res .= $value;
    }elseif($key == 5){
      $res .= $value.'-';
    }else $res .= $value;
  }
  return $res;
}