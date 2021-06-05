<?php 

function to_nato($words){
return join(array_map(function($e){return array(
'A' =>'Alfa',
'B' => 'Bravo',
'C' => 'Charlie',
'D' => 'Delta',
'E' => 'Echo',
'F' => 'Foxtrot',
'G' => 'Golf',
'H' => 'Hotel',
'I' => 'India',
'J' => 'Juliet',
'K' => 'Kilo',
'L' => 'Lima',
'M' => 'Mike',
'N' => 'November',
'O' => 'Oscar',
'P' => 'Papa',
'Q' => 'Quebec',
'R' => 'Romeo',
'S' => 'Sierra',
'T' => 'Tango',
'U' => 'Uniform',
'V' => 'Victor',
'W' => 'Whiskey',
'X' => 'Xray',
'Y' => 'Yankee',
'Z' => 'Zulu')[strtoupper($e)] ?: $e;},str_split(str_replace(' ', '', $words))), ' ');  
}