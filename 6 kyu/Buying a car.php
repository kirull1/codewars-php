<?php 

function nbMonths($sPO, $sPN, $sM, $pB) {
    while ($sPO + $sum < $sPN) {
        $n++%2==0 ?: $pB += 0.5;
        $sPO -= $sPO*($pB/100);
        $sPN -= $sPN*($pB/100);
        $sum += $sM;
    }
    return [$n, round($sPO + $sum - $sPN)];
}