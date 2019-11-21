#!/usr/bin/php
<?PHP
if ($argc == 2)
{
$str = trim(preg_replace("/\s+/", " ", $argv[1]));
while($str[$i])
{
$arr[$i] = $str[$i];
$i++;
}
echo $str."\n";
}
?>
