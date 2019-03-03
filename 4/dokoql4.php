<?php
	/**
	 * Created by PhpStorm.
	 * User: MasashiHiraishi
	 * Date: 2019-03-03
	 * Time: 10:49
	 */

	$sql = <<< EOF

SELECT * FROM 注文履歴 ORDER BY tyumonbangou ASC,edabann ASC 

SELECT syouhinnmei FROM tyumonnrireki WHERE BETWEEN date  '2018-01-01' AND '2018-01-29' ORDER BY syouhimmmei ASC 

SELECT banngou,edaban,kinngaku FROM  rireki WHERE bunnrui = 1 order by kingaku asc offset 1 limit 4 

select hiduke,syouhin,tanka,syuryo,kinngaku from rireki where  bunrui = 3 order by date asc 

select bunnrui,syouhinnmei,saizu,tanka from rireki  group by bunrui


select * from sizennsu union select *from sguuguukiguu



SELECT himoku,syukkinngaku
			case himoku when 'kyozyuuhi' then 'koteihi'
						when 'suidouhi' then 'koteihi'
						else 'henndouhi'
						end as syubpinobunnrui
						from kakeibo
						where syukinngaku > 0;
						

select memo, Length(memo) as memonobnagasa from kakeibo

select
 	sum(syukinngaku) as goukeisyukiingaku,
	avg(syukiingaku) as heikinnsyukkingaku,
	max(syukiingaku) as sannzai,
	min(syukiingaku) assyougaku,
FROM kakeibo

select count(*) as syokuhi
from kakeibo
where himoku = 'syokuhi';


SELECT himoku,AVG(syukinngaku) as himokubetu
from kakeibo
group by himoku;


select himoku,sum(syukinngaku) as himokubetu
from kakeibo
group by himoku
having sum(syukinngaku) > 0;


SELECT hiduke,count(*) from kanri where ziyu = 3 group by hiduke having hiduke;

select syainnmei ,count(*) from kannri where 
EOF;

