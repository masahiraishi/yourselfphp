<?php
/**
 * Created by PhpStorm.
 * User: MasashiHiraishi
 * Date: 2019-02-24
 * Time: 14:09
 */

$sum = 0;

for ($i=1;$i<=100;$i++){

    $sum += $i;
    if($sum>1000) break;
}

print "合計が1000を超えるのは、1~45を加算した時です\n";