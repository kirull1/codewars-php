<?php 

function no_space($s){
  return str_replace(' ', '', $s);
}

function no_space(string $s): string {
    return str_replace(' ', '', $s);
}