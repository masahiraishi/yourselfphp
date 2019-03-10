<?php
	/**
	 * Created by PhpStorm.
	 * User: MasashiHiraishi
	 * Date: 2019-03-05
	 * Time: 07:59
	 */

	$sql = <<<eof
select sum(suuryou) from tyoumon
select sum(suuryou) from tyuumonn group by tyoumonnbi order by  tyoumonnbi desc 
select max(tanka),min(tanka) from syouhinn group by syouhinnkubunn order by syouhinnkubunn
select sum(t.suuryou) from syouhinn as s inner join  tyoumonn as t on s.ko-do = t.ko-do group by s.ko-do order by s.ko-do
select sum(suryou) as kosuuu from tyoumonn group by ko-do order by kousu desc,ko-do asc limit 10
select ko-do,sum(suuryou) as goukei from tyoumon group by ko-do having goukei <5
select count(ku-ponn),sum(ku-pon) from tyoumonn

eof;
