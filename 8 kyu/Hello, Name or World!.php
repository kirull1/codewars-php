<?php 

function hello($name = ''): string {
  !empty($name) ?: $name = 'World';
  return 'Hello, '.ucfirst(strtolower($name)).'!';
}