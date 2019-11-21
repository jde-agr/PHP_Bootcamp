<?PHP
function ft_split($input)
{
$my_arr = explode(" ", $input);
$i = 0;
foreach ($my_arr as $elem)
{
if ($elem != "")
{
$arr[$i] = $elem;
$i++;
}
}
sort($arr);
return $arr;
}
?>
