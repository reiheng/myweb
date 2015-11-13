<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $orz=$_POST['orz'];?>

<form method="post" action="update.php">
	<b>ID:</b>
	<input type="text" size="40" name="id" value="<?php echo $orz; ?>" readonly="value">
	<br>

	<?php
	require ("dbconnect.php");
	$aa="select * from testtable where id='$orz'";	
	$result = pg_query(utf8_encode($aa)) or
	die (pg_error());

	if (($row = pg_fetch_array($result))!= 0)
	{	
		$bb=$row['name'];
		$cc=$row['age'];
		$dd=$row['memo'];
	}
	else
	{
		$bb=' ';
		$cc=' ';
		$dd=' ';
	}
	?>
	<b>Name:</b>
	<input type="text" size="40" name="name" value="<?php echo $bb ?>">
	<br>
	<b>Age:</b>
	<input type="text" size="40" name="age" value="<?php echo $cc ?>" >
	<br>
	<b>Memo:</b>
	<input type="text" size="40" name="memo" value="<?php echo $dd ?>">
	<br>
	<input type="submit" name="submitz" value="修改">
</form>

