<?php
//setcookie("childid",1);
if (isset($_COOKIE["id"]))
    $id=$_COOKIE["id"];
else
    $id=1;
$wishes=file_get_contents("http://f0578562.xsph.ru/api/children/childWishes.php?id=$id");
echo $wishes;
?>