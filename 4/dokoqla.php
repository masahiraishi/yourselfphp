<?php
	/**
	 * Created by PhpStorm.
	 * User: MasashiHiraishi
	 * Date: 2019-03-03
	 * Time: 22:11
	 */
	$sql = <<< EOF

select sum(zanndaka),max(zandaka),min(zandaka),avg(zandaka),count(*) from kouza;

select count(*) from kouza where syubetu <> hutuu and zandaka > 1000000 and kousinnbi < '2017-01-01';

select count(*) from kouza where kkousinnbi IS NULL

select max(miegi),min(meigi) from kouza 

select max(kousinnbi),min(kousinnbi) from kouza
54
select sum(zanndaka),max(zandaka),min(zandaka),avg(zandaka),count(*) from kouza group by syubetu;

 select count(*) from kouza group by kouzabangou  having ? bangou like '%1'
 
 select sum(*),max(*),minn(*),avg(*),count(*) from kouza group by  kousinbi  having

select sum(zandaka),count(*) from kouza group by syubetu having sum(zandaka) > 3000000;

49
SELCT sum(zandaka),max(zandaka),min(zandaka),avg(zandaka),count(*) from kouza

select count(*) from kouza where kousinnbi <= 2017 and zandaka >= 100 and syubetu <> hutuu;

select 

select max(meigi),min(meigi) from kouza;

select max(kousinnbi),min(kousinnbi) from kouza;

select sum(zanndaka),max(zanndaka),min(zanndaka),avg(zanndaka),count(*) from kouza group by syubetu


EOF;
