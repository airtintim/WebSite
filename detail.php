<?php
require_once("include/db_connect.php");
$id = $_GET['id'];
$query = "SELECT * FROM `event` WHERE `id` = $id";

//讀取資料
$result = mysqli_query($con,$query);

$title = mysqli_result($result,0,"title");
$content = mysqli_result($result,0,"content");

echo '<form action = "" method="POST">
			標題:</br><input name = "title" value = "'.$title.'"></br></br>
			內容:</br><textarea name = "content">'.$content.'</textarea></br></br>
			</form>';

?>