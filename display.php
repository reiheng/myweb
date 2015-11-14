<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("dbconnect.php");  ?>

<h2>資料列表 2015/11/13</h2>

<?php	
if($_POST['submit'])	
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$memo = $_POST['memo'];
	
	//取得上傳檔案資訊
    $filename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $filetype=$_FILES['image']['type'];
    $filesize=$_FILES['image']['size'];    
    $file=NULL;
    
    if(isset($_FILES['image']['error'])){    
        if($_FILES['image']['error']==0){                                    
            $instr = fopen($tmpname,"rb" );
            $file = addslashes(fread($instr,filesize($tmpname)));        
        }
    }
    if ($file == NULL){
		echo "file error"
	}
    //新增圖片到資料庫
                        
	pg_query("insert into testtable (id,name,age,memo, img) values ('$id','$name','$age','$memo', '$file')");
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
	."<br><b>Image:</b>". $row['img']
	."<br><br><br>";
}
pg_free_result($result);

?>

<h2><a href="search.php">修改</a></h2>
<h2><a href="delete.php">刪除</a></h2>
<h2><a href="index.php">新增</a></h2>
</form>