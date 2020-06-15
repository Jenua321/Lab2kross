<?php
session_start();
include_once ("lang.".$_SESSION['NowLang'].".php");
echo $Lang['error'];
?>
<!DOCTYPE html>
<html>

<body>
     <a href="index.php">Вернуться назад</a> 
</body>
</html>