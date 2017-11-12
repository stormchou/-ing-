<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bbs";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("数据库连接失败" . $conn->connect_error);
	}

	$conn->query("set names 'utf8'");

 ?>