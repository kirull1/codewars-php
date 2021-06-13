<?php 

function oper($fct, $s) {
  return $fct == 'vertMirror' ? join("\n",array_map('strrev',explode("\n", $s))) : join("\n",array_reverse(explode("\n", $s)));
}


  function vertMirror($s) {
    return join("\n",array_map('strrev',explode("\n", $s)));
  }
  function horMirror($s) {
    return join("\n",array_reverse(explode("\n", $s)));
  }
  function oper($fct, $s) {
      return $fct == 'vertMirror' ? vertMirror($s) : horMirror($s);
  }