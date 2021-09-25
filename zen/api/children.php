<?php
setcookie("childid",1);
$children=file_get_contents("http://f0578562.xsph.ru/api/children/get.php?id=2");
echo $children;
?>