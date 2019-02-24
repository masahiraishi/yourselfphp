<?php
/**
 * Created by PhpStorm.
 * User: MasashiHiraishi
 * Date: 2019-02-24
 * Time: 17:52
 */

$sql = <<< EPD

SELECT * FROM pref WHERE 都道府県 LIKE '%川';

SELECT * FROM pref WHERE 都道府県 LIKE '%島%'; 

SELECT * FROM pref WHERE 都道府県 LIKE '愛%'; 

SELECT * FROM pref WHERE 都道府県 = 県庁所在地; 

SELECT * FROM pref WHERE 都道府県 <> 県庁所在地; 


EPD;

$sql33 = <<< EOD

SELECT * FROM 成績表;

INSERT INTO 成績表 VALUES (S001,'織田信長',77,55,80,75,93,NULL);

INSERT INTO 成績表 VALUES (A002,'豊臣秀吉',64,69,70,0,59,NULL);

INSERT INTO 成績表 VALUES (E003,'徳川家康',80,83,85,90,79,NULL);

UPDATE  成績表 SET (法学=85,哲学=67);

UPDATE 成績表 SET (外国語=81) WHERE 学籍番号 IN (A002,E003);


UPDATE  成績表 SET (総合成績=A) WHERE 
UPDATE  成績表 SET (総合成績=B) WHERE 
EOD;
