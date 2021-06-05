<?php 

class Person{
  protected $name, $age, $occupation;
  public function set_name($a){
    $this->name = $a;
    if(!is_string($a)) throw new InvalidArgumentException("Name must be a string!");
  }
  public function set_age($a){
    $this->age = $a;
    if($a <= 0 || !is_int($a)) throw new InvalidArgumentException("Age must be a non-negative integer!");
  }
  public function set_occupation($a){
    $this->occupation = $a;
    if(!is_string($a)) throw new InvalidArgumentException("Occupation must be a string!");
  }
  public function __construct($name, $age, $occupation){
    if(!is_string($name)) throw new InvalidArgumentException("Name must be a string!");
    if($age < 0 || !is_int($age)) throw new InvalidArgumentException("Age must be a non-negative integer!");
    if(!is_string($occupation)) throw new InvalidArgumentException("Occupation must be a string!");
    $this->name = $name;
    $this->age = $age;
    $this->occupation = $occupation;
  }
  public function get_name(){
    return $this->name;
  }
  public function get_age(){
    return $this->age;
  }
  public function get_occupation(){
    return $this->occupation;
  }
}