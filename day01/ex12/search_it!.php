#!/usr/bin/php
<?PHP
if ($argc > 2)
{
$i = 2;
while ($i < $argc)
{
$str .= $argv[$i];
if ($i + 1 != $argc)
$str .= "&";
$i++;
}
$str = str_replace(":", "=", $str);
parse_str($str, $arr);
if (array_key_exists($argv[1], $arr))
{
echo $arr[$argv[1]]."\n";
}
}
?>
