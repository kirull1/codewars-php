<?php 

function mean($town, $strng){
    return array_combine(array('Rome','London','Paris','NY','Vancouver','Sydney','Bangkok','Tokyo','Beijing','Lima'),array_map(function($e){return array_sum(explode(' ',preg_replace('/[^0-9.]/', ' ', $e)))/12;},explode("\n",$strng)))[$town] ?: -1;
}

function variance($town, $strng){
    $s = array_combine(array('Rome','London','Paris','NY','Vancouver','Sydney','Bangkok','Tokyo','Beijing','Lima'),array_map(function($e){return array_diff(explode(' ',preg_replace('/[^0-9.]/', ' ', $e)), array(''));},explode("\n",$strng)))[$town];
    if(!$s) return -1;
    foreach($s as $i) $result += ($i - array_sum($s)/count($s))**2;
    return $result/count($s);
}