<?php 

function increment_x(){
  global $x;
  $x++;
}
function double_x_triple_y_quadruple_z(){
  global $x,$y,$z;
  $x *= 2;
  $y *= 3;
  $z *= 4;
}
function append_whitespace_to_string(){
  global $string;
  $string .= ' ';
}
function add_world_to_string(){
  global $string;
  $string .= 'world';
}