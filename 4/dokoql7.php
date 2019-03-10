<?php
	/**
	 * Created by PhpStorm.
	 * User: MasashiHiraishi
	 * Date: 2019-03-09
	 * Time: 20:16
	 */

	$sql = <<< EOF

SELECT himoku,syukkinngaku from kakeibo where syukiingaku = ( select max(syukinngaku) from kakeibo);

update kakeibosyuukei set heikinn = (select avg(syukinngaku) from kakeiboa-kaibu where syukinngkau >0 and himoku ='syokuhi') where himoku = syokuhi

select hiduke,memo,syukiingaku (select goukei from kakeibosyuukei where himoku ='syokuhi')as kakonogoukei from kakeibo where himoku='syokuhi'

select * from kakeibo where himoku IN (select distinct himoku from syuukei);

select * from kakkeibo where himoku = 'syokuhi' and suykkingaku < any (select syukinngaku from kakkeibo where himoku = 'syokuhi')

select sum(sub.syukinngaku) as syukinngaku from (select hiduke,himoku,syukinngaku from kakeibo union select hiduke,himoku,syukinngaku from kakeibo where hiduke >= '2018-01-01' amd hiduke <= '2018-01-31') as sub

insert into kakeibo(himoku,goukei,heikinn,kaisuu) select himoku, sum(syukinngaku),avg(syukkingaku),0 from kakeibo where syukinngaku >0 group by himoku

select distinct himoku from kakiebo

inseert into (select ken as ken,count(*) as kennsuu from kotaisikibetu group by siikuken) values (siikuken,tousuu)  

select banngou,hinnsu,hi,hahabanngou from sikibetu where hahabangou in (select banngou from sikibetu where siyuu = 2,hinnsyu =01)

select banngou ,naame,busyo from syain inner join busyo ON busyoid = busyoid

select banngou ,naame,busyo from syain inner join busyo ON zyousiid = busyoid

select s.*,syain.namae,count(2.banngou) from siten AS s inner join syain AS syain ON s.sitenntyou= syain.banngu inner join syain inner join syain as 2 ON sitenid = kinnmmutiid group by banngou

select ko-do,syouhinnmei,tannka,(select sum(suuryou) from tyumonn where ko-do = 'S0604') from syouhinn

select t.tyuuonnbi,kord from tyuumonn where syouhinnmei in (select syouhinnmei from tyuumonn where syouhinnmei like '%あったか%') order by tyuumonnbi asc

select kord,suuryou from tyumonn where kord > all(select avg(suuryou) from syouhinn group by syouhinn)

EOF;
