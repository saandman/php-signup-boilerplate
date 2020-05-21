<?php  
$con = mysqli_connect("localhost", "root", "", "DBname"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

$query = mysqli_query($con, "INSERT INTO test VALUES ('2', 'Test Query')");

?>

<html>
<head>
	<title>Sample</title>
</head>
<body>
	Hello World
</body>
</html>