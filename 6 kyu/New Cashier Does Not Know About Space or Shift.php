<?php 

function getOrder($input) {
    $res['Burger'] = substr_count($input, 'burger');
    $res['Fries'] = substr_count($input, 'fries');
    $res['Chicken'] = substr_count($input, 'chicken');
    $res['Pizza'] = substr_count($input, 'pizza');
    $res['Sandwich'] = substr_count($input, 'sandwich');
    $res['Onionrings'] = substr_count($input, 'onionrings');
    $res['Milkshake'] = substr_count($input, 'milkshake');
    $res['Coke'] = substr_count($input, 'coke');
    foreach($res as $key => $value) $result .= str_repeat($key.' ',$value);
    return trim($result);
}