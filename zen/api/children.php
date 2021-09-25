<?php
//setcookie("childid",1);
if (isset($_COOKIE["id"]))
    $id=$_COOKIE["id"];
else
    $id=1;
$children=file_get_contents("http://f0578562.xsph.ru/api/children/get.php?id=$id");
echo $children;
?>