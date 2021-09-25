<?php
if (isset($_COOKIE["id"]))
    $id=$_COOKIE["id"];
else
    $id=1;
$events=file_get_contents("http://f0578562.xsph.ru/api/event/getList.php?id=$id");
echo $events;
?>