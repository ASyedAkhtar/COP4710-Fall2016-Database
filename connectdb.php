<!DOCTYPE html>
<html>
<body>

<?php

//connects to database outputs Weekend id

$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="am039583_db";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());


	$sql = "SELECT  * FROM     WEEKEND";
	$result = mysqli_query ($conn, $sql);
//$result = $conn ->query($sql);

	

while($row = $result->fetch_assoc()){
    echo $row['ID'] . '<br />';
}


mysqli_close($conn);


?>

</body>
</html>