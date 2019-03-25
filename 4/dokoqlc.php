<?php
	/**
	 * Created by PhpStorm.
	 * User: MasashiHiraishi
	 * Date: 2019-03-11
	 * Time: 06:12
	 */

	$sql = <<< EOF

select min(hp),max(hp),avg(hp),min(mp),max(mp),avg(mp) from party

select type,caount(bangou) from ibent gorup by type



select count(kekka) from keiken where kubun = 1 group by kekka order by  kekka asc  

select case type when '1' then 'kyousei' when '2' then 'huri-' when '3' then 'tokusyu' end as type,count(bangou) from ibent group by type

select case kubun when '0'then kuria when '1' then 'mada',count(bangou) from keiken

select zandaka,(select sum(nyuukinn),sum(syukinngaku) from torihiki where hiduke = '2017-12-28') from kouza;

select bangou,meigi,zandaka from kouza where bangou in(select bangou from torihiki where nyukinn >100 )

SELECT himoku,nyuukinngaku FROM CASE WHEN nyuukinngaku < 5000 THEN 'お小遣い' WHEN nyuukinngaku < 10000 THEN '一時収入' WHEN nyukinngaku < 30000 THEN '給料出た'  ELSE  '想定外' END AS 収入の分類 FROM kakeibo WHERE nyuukinngaku > 0;


select CASE code 
	WHEN 01 THEN yuusya
	WHEN 10 THEN sensi
	WHEN 11 THEN budouka
	WHEN 20 THEN mahou
	WHEN 21 THEN gakusya
	AS namae,
	hp AS genzai
	ROUND(AVG(hp)/genzai)
	FROM
	party
	WHERE
	
	UPDATE party SET VALUES (mp=(SELECT sum(mp) FROM party WHERE id <>20)*0.1+(select mp from party where id =20))
	SELECT bangou,kekka FROM keiken WHERE ivent IN (SELECT ivent FROM ivent WHERE type IN(1,3))
	
	SELECT maxmp,namae FROM (SELECT MAX(mp) AS maxmp,name AS namae FROM party);
	
	SELECT bangou,meisyou FROM ivent WHERE bangou IN (SELECT bangou FROM iventkeikenn WHERE kekka IS NOT NULL)
EOF;

