#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$str = trim($argv[1]);
	$str = preg_replace("/[\s\t\r]+/", " ", $str);
	echo $str."\n";
}
?>
