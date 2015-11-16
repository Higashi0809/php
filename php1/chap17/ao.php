
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQLカフェのページ</title>
</head>
<body bgcolor="green">
<?php
$mozi =<<<eot
SQLカフェにようこそ！
<hr>
２行目に表示させたい
３行目に表示させたい
    <u>アンダーライン</u>
    <b>太字</b>
    <i>イタリック</i>
    <a href='http://softbank.co.jp'>ソフトバンク株式会社へ</a>
    <img src="oya.gif" alt="">
eot;

print nl2br($mozi);
//print $mozi;
?>

</body>
</html>