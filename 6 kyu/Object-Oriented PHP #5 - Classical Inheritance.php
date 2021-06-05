<?php 

  class Salesman extends Person{
    public function __construct($name, $age){
      parent::__construct($name, $age, 'Salesman');
    }
    public function introduce(){
      return parent::introduce().", don't forget to check out my products!";
    }
  }
  
  class ComputerProgrammer extends Person{
    public function __construct($name, $age, $occupation = "Computer Programmer"){
      parent::__construct($name, $age, $occupation);
    }
    public function describe_job(){
      return parent::describe_job().", don't forget to check out my Codewars account ;)";
    }
  }
  
  class WebDeveloper extends ComputerProgrammer{
    public function __construct($name, $age){
      parent::__construct($name, $age, "Web Developer");
    }
    public function describe_job(){
      return parent::describe_job()." And don't forget to check on my website :D";
    }
    public function describe_website(){
      return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
    }
  }