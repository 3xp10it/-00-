<?php
for($k=0;$k<=255;$k++)
{
$a='shell.php'.chr($k)."1.jpg";
echo 'k:'.$k.'   '.'$a:'.$a.'   '.'iconv("UTF-8","gbk",$a):'.iconv("UTF-8","gbk",$a)."<br>";
}
?>