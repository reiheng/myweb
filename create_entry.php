<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

require ("dbconnect.php");

if ($_POST['submit'])
{
	$query="select * from testtable where id=".$_POST['id'];
	$result = pg_query(utf8_encode($query)) or
	die (pg_error());

	if (($row = pg_fetch_array($result))==0)
	{
		$qq="update testtable set name = '".$_POST['name']."', age = '".$_POST['age']."',memo = '".$_POST['memo']."'WHERE id ='". $_POST['id']."'";
		pg_query(utf8_encode($qq)) or
		die (pg_error());
	}	
}

?>