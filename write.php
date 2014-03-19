<?php
	$left=$_GET['left'];
	$hight=$_GET['hight'];
	$top=$_GET['top'];
	$width=$_GET['width'];
	$val=$_GET['val'];
	$db = new mysqli('localhost','360er','lalala@#123','360er');
	$db->query("set names 'utf-8'");
	if (mysqli_connect_errno()){
                echo 'ERROR, can not connect to database';
        }
	$query = "insert into people(hight,top,width,lleft,val) values(".$hight.",".$top.",".$width.",".$left.",'".$val."')";
	echo $query;
	$db->query($query);
	$db->close();

?>
