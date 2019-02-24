<?php
/**
 * Created by PhpStorm.
 * User: MasashiHiraishi
 * Date: 2019-02-25
 * Time: 07:34
 */
$sum = 0;

for ($i=1;$i<=100;$i++){

    if ($i%2 != 0)continue;
    $sum += $i;
}

print "合計値は{$sum}です";