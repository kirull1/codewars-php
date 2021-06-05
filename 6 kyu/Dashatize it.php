<?php 

function dashatize(int $num): string {
            $arr = strval($num);
        for ($i=0; $i < strlen($arr); $i++) { 
            if ($arr[$i]%2 != 0) {
                $res .= '-'.$arr[$i].'-';
            }else $res .= $arr[$i];
        }
        $res = str_replace('--','-',$res);
        if ($res[strlen($res) - 1] == '-') {
            $res = substr($res,0, strlen($res) - 1);
        }
        if ($res[0] == '-') {
            $res = substr($res,1);
        }
        
        return $res;
}