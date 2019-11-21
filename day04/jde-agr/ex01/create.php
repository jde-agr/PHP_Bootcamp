<?php
if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"]
    && $_POST["submit"] === "OK")
{
    if (!file_exists("private"))
        mkdir("private");
    if (!file_exists("private/passwd"))
        file_put_contents("private/passwd", NULL);
    $acc = unserialize(file_get_contents("private/passwd"));
    if ($acc)
    {
        $dup = 0;
        foreach ($acc as $key => $value)
        {
            if ($value["login"] === $_POST["login"])
                $dup = 1;
        }
    }
    if ($dup)
        echo "ERROR\n";
    else
    {
        $arr["login"] = $_POST["login"];
        $arr["passwd"] = hash("whirlpool", $_POST["passwd"]);
        $acc[] = $arr;
        file_put_contents("private/passwd", serialize($acc));
        echo "OK\n";
    }
}
else
    echo "ERROR\n";
?>