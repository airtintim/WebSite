<?php
	if(isset($_POST['title'])){
		require_once("include/db_connect.php");
		$title = $_POST['title'];
		$content = $_POST['content'];
		$query = "INSERT INTO `event`(`title`, `content`) VALUES ('$title','$content')";
		mysqli_query($con,$query);
		header("Location: list.php");
	}else{
		echo '<form action = "" method="POST">
			標題:</br><input name = "title"></br></br>
			內容:</br><textarea name = "content"> </textarea></br></br>
			<input type = "submit">
			</form>';
	}
?>