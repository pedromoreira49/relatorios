<?php
	$mysql = new PDO('mysql:host=localhost;dbname=relatorios','root','');

	$info = $mysql->prepare("SELECT * FROM  `tb_relatorios`");

	$info->execute();

	$info = $info->fetchAll();

	die(json_encode($info));
?>