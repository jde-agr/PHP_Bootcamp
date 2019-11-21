#!/usr/bin/php
<?PHP
if ($argc > 1)
{
$str = trim($argv[1]);
while ((strpos($str, "  ")) == TRUE)
$str = str_replace("  ", " ", $str);
$str = str_replace("\t", " ", $str);
echo $str."\n";
$i = 0;
while($str[$i])
{
$arr[$i] = $str[$i];
$i++;
}
print_r($arr);
}
?>
