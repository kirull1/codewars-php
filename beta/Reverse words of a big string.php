<?php

    function reverseWords($str){
        return preg_replace_callback("/[^\s]+/",function($e){return strrev($e[0]);},trim(str_replace(['   ','  '],' ',$str)));
    }