#!/usr/bin/php
<?PHP
if ($argc > 1)
{
$str = trim(preg_replace("/\s+/", " ", $argv[1]));
$arr = explode(" ", $str);
$wcount = count($arr);
$i = 1;
while ($i < $wcount)
echo $arr[$i++]." ";
echo $arr[0]."\n";
}
?>
