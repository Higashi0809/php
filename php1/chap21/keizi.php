<?php

// データベース情報等の読み込み
require_once('data/db_info.php');

// データベースへの接続、データベース選択
$s = mysql_connect($SERV, $USER, $PASS) or die('失敗しました');
mysql_select_db($DBNM);

print 'OK!';