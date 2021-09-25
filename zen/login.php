<?php
if (isset($_POST["send"]))
{
    setcookie("id",$_POST["childid"]);
    echo "<a href='index.html'>Зайти в Дзен</a>";
}
?>
<html>
<head>
    <title>
        Вход
    </title>
</head>
<body>
<form method="post">
    <select name="childid">
        <option value="1">Иванов Ваня</option>
        <option value="3">Мешков Степа</option>
    </select>
    <input type="submit" name="send" value="Войти">
</form>
</body>
</html>