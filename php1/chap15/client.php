<?php
print "あなたのIPアドレスは:";
print getenv("REMOTE_ADDR");
print "<BR>";
print "あなたのホスト名は:";
print gethostbyaddr(getenv('REMOTE_ADDR'));
print "<BR>";
print "あなたのブラウザは:";
print getenv('HTTP_USER_AGENT');
print "<BR>ですね";
?>