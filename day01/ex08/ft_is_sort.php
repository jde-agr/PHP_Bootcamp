<?PHP
function ft_is_sort($input)
{
$data = $input;
sort($data);
$flag = 0;
$i = 0;
$wcount = count($data);
while ($i < $wcount)
{
if ($input[$i] != $data[$i])
{
$flag = 1;
break;
}
$i++;
}
if ($flag == 1)
return (0);
else
return (1);
}
?>
