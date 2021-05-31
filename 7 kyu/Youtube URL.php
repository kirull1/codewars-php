<?php

    function makeYoutubeLink(string $str): string {
        $str = explode('/',$str);
        return 'https://www.youtube.com/embed/' . str_replace(['watch?v=', 'watch?i='],'',$str[count($str)-1]);
    }