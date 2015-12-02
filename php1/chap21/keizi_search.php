<?php

//  データベース情報等の読み込み
require_once('data/db_info.php');

// データベースへ接続、データベース選択
$s = mysql_connect($SERV, $USER, $PASS) or die('失敗しました');
mysql_select_db($DBNM);

//print 'OK!';

// タイトルの表示
print <<<eot1
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ＳＱＬカフェ 検索のページ</title>
</head>
<body bgcolor='orange'>
<hr>
<font size='5'>
(検索結果はこちらに)
</font>
    <br>
eot1;

// 検索文字列を取得してタグを削除
$se_d=isset($_GET["se"])?htmlspecialchars($_GET["se"]):null;

// 検索文字列（$se_d）にデータがあれば検索処理
if($se_d<>""){
    // 検索のSQL文 テーブルtbj1にtbj0を結合
    $str=<<<eot2
    select tbj1.bang,tbj1.nama,tbj1.mess,tbj0.sure
    from tbj1
    join tbj0
    ON
    tbj1.guru=tbj0.guru
    where tbj1.mess like "%$se_d%"
eot2;

    $re=mysql_query($str);
    while($kekka=mysql_fetch_array($re)){
        print "$kekka[0]: $kekka[1]: $kekka[2]($kekka[3])";
        print "<br><br>";
    }
}

mysql_close($s);

print <<<eot3
<hr>
メッセージに含まれる文字を入力してください！
<br>
<form method="GET" action="keizi_search.php">
検索する文字列
<input type="text" name="se">
<br>
<input type="submit" value="検索">
    </form>>
    <br>
    <A HREF="keizi_top.php">
    スレッド一覧に戻る
    </A>
    </body>
    </html>
eot3;
?>