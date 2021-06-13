<?php 

function toJadenCase($str) {
  return join(' ',array_map('ucfirst',explode(' ', $str)));
}