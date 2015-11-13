<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//PostgreSQL - 新刪修查&連結&狀態
$dbhost = "ec2-23-23-210-37.compute-1.amazonaws.com";
$dbname = "d2oq8v8p7ncb9f";
$dbuser = "xglillsltpycbn";
$dbpass = "XhABdo_POZ_DPgU7EL_LFsZpf3";

//Link postgreSQL-Server 
$testtable = pg_connect("host = $dbhost dbname = $dbname user = $dbuser password = $dbpass");

//create table 
//pg_query("CREATE TABLE testtable (id char(50),name char(50),age char(50),memo char(50))");

?> 



