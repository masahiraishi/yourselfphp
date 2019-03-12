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
EOF;

