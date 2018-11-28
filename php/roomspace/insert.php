<?php
mb_internal_encoding("utf8");

$pdo= new PDO("mysql:dbname=lesson_kimura;host=localhost;","root","");
//""の部分はプログラマカレッジ内だとパスワードいるので'mysql'にする

$pdo ->exec("insert into roomspace(name,width,depth)values('".$_POST['name']."','".$_POST['width']."','".$_POST['depth']."');");

header("Location:http://localhost/roomspace/roomspace.php");



?>
