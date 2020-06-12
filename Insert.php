<!DOCTYPE html>
<html lang="ko">

<h3>Result</h3>
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

mysqli_query($conn,$query);

#if(!mysqli_query($conn,$query)){
#	die('Error: '.mysqli_error());
#}

echo "Successfully added!";

mysqli_close($conn);
?>

<form method="POST" action="add_info.php">
<input type="submit" value="return">
</form>

</body>
</html>

