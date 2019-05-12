<?php
	/**
	 * Created by PhpStorm.
	 * User: MasashiHiraishi
	 * Date: 2019-05-12
	 * Time: 11:48
	 */

	$data[] = date('Y/m/d H:i:s');
	$data[] = $_SERVER['SCRIPT_NAME'];
	$data[] = $_SERVER['HTTP_USER_AGENT'];
	$data[] = $_SERVER['HTTP_REFERER'];

//	access.log追記書き込みモード
	$file = @fopen('access.log','ab') or die('ファイルを開けませんでした');
//	ファイルのロック
	flock($file,LOCK_EX);
//	ファイルの書き込み
	fwrite($file,implode("\t",$data)."\n");
//	ロックの解除
flock($file,LOCK_UN);
//ファイルのクローズ
	fclose($file);
	print 'アクセスログを記録しました！';
