#!/usr/bin/php
<?PHP
function my_sort($p1, $p2)
{
$l1 = strtolower($p1);
$l2 = strtolower($p2);
$i = 0;
$str = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
while (($i < strlen($p1)) && ($i < strlen($p2)))
{
$pos1 = strpos($str, $l1[$i]);
$pos2 = strpos($str, $l2[$i]);
if ($pos1 < $pos2)
return (-1);
else if ($pos1 > $pos2)
return (1);
else
$i++;
}
}
if ($argc > 1)
{
$i = 1;
while ($i < $argc)
{
$str .= " ".$argv[$i]." ";
$i++;
}
$str = trim(preg_replace("/\s+/", " ", $str));
$arr = explode(" ", $str);
usort($arr, "my_sort");
foreach ($arr as $elem)
echo $elem."\n";
}
?>
