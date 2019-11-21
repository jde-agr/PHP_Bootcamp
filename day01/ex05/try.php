#!/usr/bin/php
<?PHP
if ($argc > 1)
{
$str = trim($argv[1]);
$i = 0;
$j = 0;
$space = 0;
$estr = "";
while ($str[$i])
{
if (($str[$i] == ' ' || $str[$i] == '\t') && $space == 0)
{
$estr[$j++] = $str[$i];
$space = 1;
}
else if ($str[$i] != ' ')
{
$estr[$j++] = $str[$i];
$space = 0;
}
$i++;
}
print_r($estr);
echo "\n".$estr."\n";
}
?>
