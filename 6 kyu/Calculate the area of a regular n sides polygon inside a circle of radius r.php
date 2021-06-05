<?php 

function areaOfPolygonInsideCircle($r, $n): float{
    return round((($r * $r * $n) * sin((360 / $n) * pi() / 180)) / 2, 3);
}