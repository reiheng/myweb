<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$orz=$_POST['orz'];

?>

<form method="post" action="create_entry.php">
	<h2><?php echo $orz;?>資料已刪除</h2>
	<br>
	<h2><a href="display.php">資料列表</a></h2>
	
	<?php
	require ("dbconnect.php");
	$aa="delete from testtable where id='$orz'";	
	pg_query($aa);
	?>
</form>

