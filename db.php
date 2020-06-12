<!DOCTYPE html>
<html>
<head>
<title>Materials information</title>
</head>

<style>
table{font-size: 9pt;}
</style>

<body>

<?php
$mysql_host='localhost';
$mysql_user='admin';
$mysql_password='raspberry';
$mysql_db='project_DB';
$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
if(!$conn){
	die('Could not connect: '.mysqli_error());
}
?>

<?php

if($_POST['mode']=='Search'){
	$semester =$_POST['semester'];
	$code =$_POST['code'];
	$professor =$_POST['professor'];
	$class =$_POST['classes'];
	$filename =$_POST['filename'];

	if($semester){
		$search_char = $search_char." and semester like '%$semester%'";
	}
	if($code){
		$search_char = $search_char." and code like '%$code%'";
	}
	if($professor){
		$search_char = $search_char." and professor like '%$professor%'";
	} 
	if($class){
		$search_char= $search_char." and class like '%$class%'";   
	}
	if($filename){
		$search_char.=" and filename like '%$filename%'";
	}
}

	$query="SELECT * FROM ClassMaterial WHERE 1 $search_char ORDER BY semester,filename";
	$result=mysqli_query($conn,$query);
	$total=mysqli_num_rows($result);
?>

<h2>Class material information</h2>

<form name="mb" action="db.php" method='POST'>
Semester: <input type="text" name="semester" value='<?=$semester?>'><br>
Code: <input type="text" name="code" value='<?=$code?>'><br>
Professor: <input type="text" name="professor" value='<?=$professor?>'><br>
Class: <input type="text" name="classes" value='<?=$class?>'><br>
Filename: <input type="text" name="filename" value='<?=$filename?>'><br>
<input type='hidden' name='mode' value='Search'>
<input type="submit" value="search">
</form>
<form method="POST" action="first_page.php">
<input type="submit" value="return">
</form>
<hr>

<table width="100" border="0" cellpadding ='10'cellspacing='1' bgcolor="#999999">
<tr align="center" class="text">
<td height="25" bgcolor="#f5f5f5"><strong>semester</strong></td>
<td height="25" bgcolor="#f5f5f5"><strong>code</strong></td>
<td height="25" bgcolor="#f5f5f5"><strong>professor</strong></td>
<td height="25" bgcolor="#f5f5f5"><strong>class</strong></td>
<td height="25" bgcolor="#f5f5f5"><strong>filename</strong></td>
</tr>

<?php
while($list=mysqli_fetch_array($result)){
?>

<tr class="text" bgcolor="#FFFFFF">
	<td><?=$list['semester']?></td>
	<td><?=$list['code']?></td>
	<td><?=$list['professor']?></td>
	<td><?=$list['class']?></td>
	<td><a href ="/OSS_final_project/pdf/web/viewer.html?file=../../Class/<?=$list['filename']?>"><?=$list['filename']?></a></td>
</tr>
<?php
}
?>

</table>
</body>
</html>
