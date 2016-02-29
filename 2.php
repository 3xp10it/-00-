<?php
 
function asc2hex($str) {  
return '\x'.substr(chunk_split(bin2hex($str), 2, '\x'),0,-2);  
} 

 
function hex2asc($str) {  
$str = join('',explode('\x',$str));  
$len = strlen($str);  
for ($i=0;$i<$len;$i+=2) $data.=chr(hexdec(substr($str,$i,2)));  
return $data;  
}  


for($k=0;$k<256;$k++)
{
$a=sprintf("\x%02x",$k);
echo '$k:'.$k.' ';
echo '$a:'.$a.' ';
echo 'hex2asc($a):'.hex2asc($a);
$file_name="shell.php".hex2asc($a)."1.jpg";
echo '$file_name:'.$file_name.'  ';
$file_name=iconv("UTF-8","gb2312",$file_name);
echo 'iconv("UTF-8","gb2312",$file_name):'.$file_name."<br>";
}
/*
echo hex2asc('\x00');
*/
?>