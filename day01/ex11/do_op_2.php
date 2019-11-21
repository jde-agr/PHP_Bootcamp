#!/usr/bin/php
<?PHP
if ($argc != 2)
echo "Incorrect Parameters\n";
else
{
if (strpos($argv[1], "+") !== false)
$arr = explode("+", $argv[1]);
else if (strpos($argv[1], "-") !== false)
$arr = explode("-", $argv[1]);
else if (strpos($argv[1], "*") !== false)
$arr = explode("*", $argv[1]);
else if (strpos($argv[1], "/") !== false)
$arr = explode("/", $argv[1]);
else if (strpos($argv[1], "%") !== false)
$arr = explode("%", $argv[1]);
else
{
echo "Syntax Error\n";
exit();
}
if (count($arr) != 2)
{
echo "Syntax Error\n";
exit();
}
else
{
foreach ($arr as $elem)
$arr2[] = trim($elem);
if (!ctype_digit($arr2[0]) || !ctype_digit($arr2[1]))
echo "Syntax Error\n";
else
{
if (strpos($argv[1], "+") !== false)
echo ($arr2[0] + $arr2[1])."\n";
else if (strpos($argv[1], "-") !== false)
echo ($arr2[0] - $arr2[1])."\n";
else if (strpos($argv[1], "*") !== false)
echo ($arr2[0] * $arr2[1])."\n";
else if (strpos($argv[1], "/") !== false)
echo ($arr2[0] / $arr2[1])."\n";
else if (strpos($argv[1], "%") !== false)
echo ($arr2[0] % $arr2[1])."\n";
}
}
}
?>
