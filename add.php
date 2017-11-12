<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加留言</title>
</head>
<body>
	<?php
		include("connect.php");

		$user = $_POST["user"];
		$title = $_POST["title"];
		$content = $_POST["content"];

		$sql = "insert into message (user, title, content) values ('$user', '$title', '$content')";

		if ($conn->query($sql)) {
			echo "<script>
					alert('留言成功');
					location.href='index.html';
				</script>";
		} else {
			echo "留言失败: " . $conn->error;
		}

		$conn->close();
	 ?>
</body>
</html>
