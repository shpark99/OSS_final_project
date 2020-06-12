<!DOCTYPE html>
<html lang="ko">

<title>Result</title>
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


$query="INSERT INTO ClassMaterial(semester, code, professor, class, filename) VALUES('$_POST[semester]','$_POST[code]','$_POST[professor]','$_POST[classes]','$_POST[filename]')";

if(empty($_POST['semester']) || empty($_POST['code']) || empty($_POST['professor']) || empty($_POST['classes']) || empty($_POST['filename'])){
	echo('Error: fill all the blanks');
}else{
	mysqli_query($conn,$query);
	echo "Successfully added!";
}

mysqli_close($conn);
?>

<form method="POST" action="add_info.php">
<input type="submit" value="return">
</form>

</body>
</html>

