<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		header("Content-type: text/html; charset=utf-8");

		echo $_GET["webname"]."</br>";

		echo $_POST["inputText"]."</br>"."________"; 
	 ?>

	 <a href="test1.php?webname=huiMei">点击提交站点</a>

	 <form action="" method="post">
	 	<input type="text" name="inputText"></input>
	 	<input type="submit" value="提交"></input>
	 </form>
</body>
</html>