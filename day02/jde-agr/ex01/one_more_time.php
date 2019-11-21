#!/usr/bin/php
<?PHP
date_default_timezone_set("Europe/Paris");
$days = array("", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi",
"dimanche");
$months = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet",
"août", "septembre", "octobre", "novembre", "décembre");
if ($argc == 2)
{
	$str = trim($argv[1]);
	$str = preg_replace("/:/", " ", $str);
	$arr = explode(" ", $str);
	if (count($arr) != 7 ||
        preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $arr[1]) ===
        0 ||
        preg_match("/^([0-9]{4})$/", $arr[3]) === 0 ||
        preg_match("/^([0-1][0-9]|2[0-3])$/", $arr[4]) === 0 ||
        preg_match("/^([0-5][0-9])$/", $arr[5]) === 0 ||
        preg_match("/^([0-5][0-9])$/", $arr[6]) === 0)
	{
		echo "Wrong Format\n";
		exit();
	}
    $arr[0] = array_search(lcfirst($arr[0]), $days);
	$arr[2] = array_search(lcfirst($arr[2]), $months);
	if ($arr[0] === 0 || $arr[2] === 0)
	{
		echo "Wrong Format\n";
		exit();
	}
	$ans = mktime($arr[4], $arr[5], $arr[6], $arr[2], $arr[1], $arr[3]);
	if (date("N", $ans) == $arr[0])
		echo $ans."\n";
	else
		echo "Wrong Format\n";
}
?>
