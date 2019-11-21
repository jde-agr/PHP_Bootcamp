#!/usr/bin/php
<?PHP
//https://stackoverflow.com/questions/36309027/replace-a-string-inside-a-specific-tag
//https://stackoverflow.com/questions/11174807/how-to-use-preg-replace-callback/21631013
//$find = '~{tag}(.*?){/tag}~';
if ($argc == 2)
{
    if (!file_exists($argv[1]))
        exit();
    $file = fopen($argv[1], "r");
    $cur = "";
    while ($file && !feof($file))
        $cur .= fgets($file);
    $cur = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/i", 
        function($brackets) {
            $brackets[0] = preg_replace_callback("/( title=\")(.*?)(\")/i",
            function($brackets) {
                return ($brackets[1]."".strtoupper($brackets[2])."".$brackets[3]);
            }, $brackets[0]);
            $brackets[0] = preg_replace_callback("/(>)(.*?)(<)/i",
            function($brackets) {
                return ($brackets[1]."".strtoupper($brackets[2])."".$brackets[3]);
            }, $brackets[0]);
            return ($brackets[0]);
        }, $cur);
    echo $cur;
}
?>