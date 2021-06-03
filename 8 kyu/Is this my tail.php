<?php 

function equivalent($body, $char) {
  return $body[strlen($body)-1] == $char ? true : false;
}