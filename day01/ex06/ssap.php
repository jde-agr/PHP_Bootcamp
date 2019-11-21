#!/usr/bin/php
<?PHP
if ($argc > 1)
{
$i = 1;
while ($i < $argc)
{
$str .= $argv[$i]." ";
$i++;
}
$str = trim(preg_replace("/\s+/", " ", $str));
$arr = explode(" ", $str);
sort($arr);
foreach ($arr as $elem)
echo "$elem\n";
}
?>
