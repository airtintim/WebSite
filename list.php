<?php
require_once("include/db_connect.php");

$query = "SELECT * FROM `event`";

//讀取資料
$result = mysqli_query($con,$query);

echo "<table border = 1 width = 200px>
	<tr><th>事件</th></tr>";
for($i = 0;$i < $result->num_rows;$i++){
	//取得資料
	$id = mysqli_result($result,$i,"id");
	$title = mysqli_result($result,$i,"title");
	echo "<tr><td><a href = 'detail.php?id=$id'>$title</a></td></tr>";

}

echo "</table>";
?>