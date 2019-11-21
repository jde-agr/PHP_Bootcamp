#!/usr/bin/php
<?PHP
//https://unix.stackexchange.com/questions/466257/explanation-for-the-meaning-of-content-of-the-var-run-utmp-file
//https://en.wikipedia.org/wiki/Utmp
//https://www.computerhope.com/unix/uwho.htm
//https://unix.stackexchange.com/questions/90206/what-does-the-who-command-result-root-0-mean
//https://www.codediesel.com/php/unpacking-binary-data/
//https://askubuntu.com/questions/325491/how-to-properly-display-the-contents-of-the-utmp-wtmp-and-btmp-files
//https://docs.oracle.com/cd/E36784_01/html/E36874/getutxent-3c.html#REFMAN3Agetutxent-3c
//http://pubs.opengroup.org/onlinepubs/007904875/basedefs/utmpx.h.html

date_default_timezone_set("Africa/Harare");
$file = fopen("/var/run/utmpx", "r");
while ($utmpx = fread($file, 628)){
    $unpack = unpack("a256user/a4id/a32device/ipid/itype/itime", $utmpx);
    //256 user, 4 id, 32 tty(dev), 4 pid, 2 stat, 2 exit, 4 time, 4 msec, 256 host, 64 pad
    $array[$unpack["device"]] = $unpack;
}
ksort($array);
foreach ($array as $elem){
    if ($elem["type"] == 7) {
        echo trim($elem["user"])."  ";
        echo trim($elem["device"])."  ";
        echo date("M  j H:i", $elem["time"]);
        echo "\n";
    }
}
?>