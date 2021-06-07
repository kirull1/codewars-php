<?php 

    function format_duration($seconds) {  
        if ($seconds == 0) return 'now';
        while ($seconds >= 60) {
            $minute++;
            $seconds -= 60;
        }
        if ($seconds != 0) $res['s'] = $seconds == 1 ? '1 second' : $seconds . ' seconds';
        while ($minute >= 60) {
            $hour++;
            $minute -= 60;
        }
        if ($minute != 0) $res['m'] = $minute == 1 ? '1 minute' : $minute . ' minutes';
        while ($hour >= 24) {
            $days++;
            $hour -= 24;
        }
        if ($hour != 0) $res['h'] = $hour == 1 ? '1 hour' : $hour . ' hours';
        while ($days >= 365) {
            $years++;
            $days -= 365;
        }
        if ($days != 0) $res['d'] = $days == 1 ? '1 day' : $days . ' days';
        if ($years != 0) $res['y'] = $years == 1 ? '1 year' : $years . ' years';
        if (count($res) == 1) {
            return current($res);
        }
        foreach (array_reverse($res) as $key => $value) {
            if ($pos++ != count($res)-1) {
                $result .= $value.', ';
            }else $result .= ' and '.$value;
        }
        return str_replace(',  ',' ',$result);
    }