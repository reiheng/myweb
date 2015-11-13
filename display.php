<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("dbconnect.php");  ?>

<h2>資料列表</h2>

<?php	
if($_POST['submit'])	
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$memo = $_POST['memo'];
	pg_query("insert into testtable (id,name,age,memo) values ('$id','$name','$age','$memo')");
}
?> 

<?php

$result = pg_query("select * from testtable ") or

die (pg_error());
$xx = pg_fetch_all($result);

foreach ($xx as $row )
{
	echo "<b>ID:</b>". $row['id']
	."<br><b>Name:</b>". $row['name']
	."<br><b>Age:</b>". $row['age']
	."<br><b>Memo:</b>". $row['memo']
	."<br><br><br>";
}
pg_free_result($result);

?>

<h2><a href="search.php">修改</a></h2>
<h2><a href="delete.php">刪除</a></h2>

</form>