<?php 

function excludingVatPrice($price){  
  return round($price / 1.15, 2) ?: -1;
}