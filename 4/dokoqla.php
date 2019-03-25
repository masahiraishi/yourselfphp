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

CREATE TABLE kakeibo(
hiduke DATE  NOT NULL
himokuid INTEGER,
memo VARCHAR(100) DEFAULT 'humei' NOT NULL,
);

CREATE TABLE gakubu (
ID CHAR(1) PRIMARY ,
name VARCHAR(20) NOT NULL UNIQUE,
bikou varchar(100) DEFAULT 'nasi' NOT NULL
)

CREATE table gakusei(
banngou CHAR(8) PRIMAARY,
name VARCHAR(30) NOT NULL,
SEINENN DATE NOT NULL,
KETUKEKI CHAR(2) DEFAULT NULL,
gaubu CHAR(1) REFERENCES gakusei(ID)

UPDATE gakusei SET (gakubuid = 'K') WHERE gakubu ='R';
DELETE FROM gakubu WHERE gakubuid = 'R' 

49
SELECT MAX(zandaka),sum(zandaka),min(zandaka),AVG(zandaka),count(id) FROM kouza

SELECT count(*) from zandaka WHERE zandaka >= 100mann and kousinnbi = 2017 and syubetu <> '普通'

SELECT COUNT(*) from kouza where kousinnbi IS NOT NULL;

select max(zandaka),min(zandaka),avg(zandaka),heikin(zandaka) from kouza group by syubetu

SELECT substring(bangou,7,1),count(*) from kouza group by sustring(banngou,7,1) ORDER BY count(*);

SELECT sum(zandaka),max(zandaka),min(zandaka),avg(zandaka)count(*) from kouza group gy substring concat((kousinnbi,1,4),'年') AS 年;

SELECT count(*) ,sum(zandaka) from kouza group by syubetu having sum(zandaka) <=300;
59

update SET kouza value()

select sum() as goukei ,zandaka from (select sum() from )

select bangou,meigi,zandaka from kouza where bangou IN (select nyuukinn from torihiki where nyuukin >=100)

SELECT (select max(nyukin) from torihiki WHERE nyuukinn) , from torihiki WHERE 


EOF;












