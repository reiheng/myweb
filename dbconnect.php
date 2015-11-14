<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//PostgreSQL - 新刪修查&連結&狀態
$dbhost = "ec2-54-83-36-203.compute-1.amazonaws.com";
$dbname = "d61p9mku8i2mnj";
$dbuser = "zkecymttysxfpm";
$dbpass = "q5IT4g7fOdDfZW58CVqWjRqc49";

//Link postgreSQL-Server 
$testtable = pg_connect("host = $dbhost dbname = $dbname user = $dbuser password = $dbpass");

//create table 
//pg_query("CREATE TABLE testtable (id char(50),name char(50),age char(50),memo char(50), img bytea)");

?> 



