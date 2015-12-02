<?php
require_once("data/db_info.php");
$s=mysql_connect($SERV,$USER,$PASS) or die("失敗しました");

mysql_select_db($DBNM);

mysql_query("delete from tbj0");
mysql_query("delete from tbj1");
mysql_query("alter table tbj0 auto_increment=1");
mysql_query("alter table tbj1 auto_increment=1");

print "ＳＱＬカフェのテーブルを初期化しました";