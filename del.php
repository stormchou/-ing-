<?php
	include ("connect.php");

	$id = $_GET["id"];

	$sql = "delete from message where id = '$id'";

	$conn->query($sql);

	echo "<script>
			location.href = 'show.php';
		</script>";

	$conn->close();
 ?>