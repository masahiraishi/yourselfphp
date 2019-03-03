<?php
/**
 * Created by PhpStorm.
 * User: MasashiHiraishi
 * Date: 2019-03-01
 * Time: 08:02
 */

$sql = <<<EOF


SELECT
	SUM(降水量) AS 平均降水量,
	AVG(最高気温) AS 最高気温,
	AVG(最低気温) AS 最低気温 
FROM
	都市別気象観測;
	
SELECT 
    都市名,
    SUM(降水量) AS 年間降水量,
    AVG(最高気温) AS 平均最高気温,
    AVG(最低気温) AS 平均最低気温,
FROM
    都市別気象観測
WHERE 
    都市名 = '東京';

SELECT
	都市名,
	AVG(降水量),
	MIN(最高気温),
	MAX(最低気温)
FROM
	都市別気温
	GROUP BY 都市名;
	
SELECT 
	月,
	AVG(最高気温),
	AVG(最低気温),
FROM
	都市別気象観測
	GROUP BY 月;
	
SELECT
	都市名,
	月,
	MAX(最高気温) AS 最高	
FROM
	都市別気象観測
WHERE 
	最高 > 38
	
SELECT 
	都市名,
	MIN(最低気温)
FROM
	都市別気象観測
GROUP BY 
	都市名
HAVING MIN(最低気温) <= -10;

SELECT
	COUNT(社員名)
FROM
  	入退出管理
WHERE
	退室 IS NULL 
  GROUP BY (社員名) 

SELECT
	COUNT(退室),
	
FROM 入退室管理
	WHERE 退室 = 1
GROUP BY 社員名
ORDER BY DESC

SELECT
	COUNT(事由区分)
FROM
	入退出	
GROUP BY 事由区分























EOF;

