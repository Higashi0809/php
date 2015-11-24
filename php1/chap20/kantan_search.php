<meta charset='UTF-8'>
<?php
require_once('data/db_info.php');
$s = mysql_connect($SERV,$USER,$PASS) or die('失敗です');
print '成功しました<br>';
mysql_select_db('db1');

$c1_d = $_POST['c1'];

//var_dump($_POST);
//var_dump($b1_d);
//$q = "delete from tbk where bang='{$b1_d}'";
//var_dump($q);
//mysql_query($q);

//$q = "select * from tbk where mess like '%{c1_d}%'";
//var_dump($q);
//$re = mysql_query($q);
$re = mysql_query("select * from tbk where mess like '%{$c1_d}%'");
while($kekka = mysql_fetch_array($re)){
    print $kekka[0];
    print ':';
    print $kekka[1];
    print ':';
    print $kekka[2];
    print '<br>';
}
mysql_close($s);

    print "<br><a href='kantan.html'>トップメニューに戻ります</a>";