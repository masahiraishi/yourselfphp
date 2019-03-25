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



SELECT sum(suuryou) from tyuumonn

SELECT sum(suuryou) from tyuumon group by hi order by hi desc

SELECT kubunn,max(tanka),min(tanka) from syouhinn griuo by kubun

select kodo ,sum(suuryou) from syouhinn group by kodo

select kodo,sum(suuryou) from syouhinn group by kodo order by sum(suryou) desc,kodo desc limit 10;

SELECT kodo,sum(suuryou) from suuryou group by kodo having sum(suuryou) <5;

SELECT count(kupon),sum(kupon) from tyumon
53
select substring(ttyuumonnbi,1,6) AS nen,sum(suryou) from tyuumon group by substring(ttyuumonnbi,1,6) 

select kodo,sum(suuryou) from kouza group by kodo having kodo LIKE 'z%' and sum(suuryou) >100

55
SELECT kodo,syouhinmei,tanka,(select sum(suuryou) from syouhinn group by kodo having kodo ='S0604') FROM syouhinn where kodo= 's0604'

UPDATE syouhinn SET kodo =(SELECT kodo from syouhinn WHERE hi ='2018-03-15' AND bangou = 201803150014 AND edaban = 1) WHERE kubun ='2' AND mei = bu-tu like '%ブーツ%' OR

select kodo,hiduke from syouhin WHERE kodo in (SELECT kodo FROM syouhinn WHERE syouhinnmei LIKE '%あったか%')
eof;
