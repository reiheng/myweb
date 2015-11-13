<?php
require ("dbconnect.php");

if(isset($_POST['submitz']))	
{
	$id=$_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$memo = $_POST['memo'];
	pg_query("update testtable set name='$name',age='$age',memo='$memo' where id='$id' ");
}

?>
<h2>修改完成</a><br>
<h2><a href="display.php">資料列表</a></h2>