<!DOCTYPE html>
<html>
<head>
	<title>检索结果</title>
</head>
<body>
<?php
	$search= $_POST['search'];
	$db=mysqli_connect('localhost','root','SEU-BME-SQL','NEDB');
	if(!$db)
	{
		die('ERROR'.mysqli_error());
	}
	$q1="SELECT * FROM OJ WHERE $search=1";
	$result1 = mysqli_query($db,$q1);
	$rownum = mysqli_num_rows($result1);
	for($i=0;$i<$rownum;$i++)
	{
		$row=mysqli_fetch_assoc($result1);
		$infoarr_bks=array('学校'=>$row['SCHOOL'],'专业'=>$row['MAJOR']);
		print_r($infoarr_bks);
	}
	mysqli_free_result($result1);
	mysqli_close($db);
?>
</body>
</html>
