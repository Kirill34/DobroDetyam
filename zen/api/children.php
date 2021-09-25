<?php
setcookie("childid",1);
$children=file_get_contents("http://dobroapi/api/children/get.php?id=2");
echo $children;
?>