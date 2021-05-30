<?php

    function getNetworkAndBroadcast($ipWithCIDR) {
        $cidr = explode('/', $ipWithCIDR);
        if(array_sum(array_map(function($e){return $e>255?1:0;},explode('.',$cidr[0])))!=0||$cidr[1]>32) return false;
        $min = long2ip((ip2long($cidr[0]))&((-1<<(32-$cidr[1]))));
        return [$min, long2ip((ip2long($min))+2**(32-$cidr[1])-1)];
    }

