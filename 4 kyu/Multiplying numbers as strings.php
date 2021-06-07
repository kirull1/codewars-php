<?php 

function multiply(string $a, string $b): string {
    for ($k=0; $k<strlen($a)+strlen($b); $k++) $res[] = 0;
    for ($i=0; $i<strlen($a); $i++) 
        for ($j=0; $j<strlen($b); $j++) 
            $res[count($res)-1-$i-$j] += $a[strlen($a)-1-$i] * $b[strlen($b)-1-$j];
    for ($l=count($res)-1; $l>-1; $l--) {
      if (strlen($res[$l]) > 1) {
        $res[$l-1] += (int) substr($res[$l],0,strlen(strval($res[$l]))-1);
        $res[$l] = (string) $res[$l];
        $res[$l] = $res[$l][strlen($res[$l])-1];
      }
    }
    return implode('', $res) == 0 ? "0" : strval(ltrim(implode('', $res), 0));
}