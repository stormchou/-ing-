<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>显示留言内容</title>
	<style>
		table {
			margin-bottom: 10px;
		}
		a {
			text-decoration: none;
		}
	</style>
</head>
<body>
	<a href="index.html">返回留言板</a>
	<hr>
	<?php
		include("connect.php");

		$sql = "select * from message";

		$result = $conn->query($sql);// 返回一个结果集

		// fetch_assoc()从结果集中获得一行作为关联数组
		while ($row = $result->fetch_assoc()) {
	?>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td>ID</td>
			<td><?php echo $row["id"]; ?></td>
		</tr>
		<tr>
			<td>作者</td>
			<td><?php echo $row["user"]; ?></td>
		</tr>
		<tr>
			<td>标题</td>
			<td><?php echo $row["title"]; ?></td>
		</tr>
		<tr>
			<td>内容</td>
			<td><?php echo $row["content"]; ?></td>
		</tr>
		<tr>
			<td>时间</td>
			<td><?php echo $row["lastdate"]; ?></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><a id="del" href="del.php?id=<?php echo $row['id']; ?>">删除留言</a></td>
		</tr>
	</table>
	<?php } ?>
	<?php
		$conn->close();
	 ?>

	 <script>
	 	window.onload = function () {

	 		var del = document.getElementById("del");

	 		del.onclick = function () {
	 			if (confirm("确认删除？")) {
	 				return true;
	 			} else {
	 				return false;
	 			}
	 		}
	 	}
	 </script>
</body>
</html>