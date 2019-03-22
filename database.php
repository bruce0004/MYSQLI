<?php 
   //1. Create a databse connection
$server = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hopephp";


$connection = mysqli_connect($server, $dbuser, $dbpass, $dbname);
//1.2 Check if connection occured succesful
if (!$connection) {
	die("database connection failed" . mysqli_connect_error());
}
echo "<b>Connection Succesful </b>";
?>

<?php 
   //2.pERFORM A DATABASE QUERY
   //SELECT columnName FROM tableName
   $query = "SELECT * FROM class_reg";
   $result = mysqli_query($connection, $query);
   //test for a querry error
   if(!$result) {
   	die("DB query failed : " . mysqli_error($connection));
   }
   // echo "<h2>Query Successful</h2>";
   // var_dump($result);
   // echo "<hr>";
   // $indexedarr = mysqli_fetch_row($result);
   // var_dump($indexedarr);
   // echo "<hr>";
   // $assocArray = mysqli_fetch_assoc($result);
   // var_dump($assocArray);
   // echo "<hr>";
   // $botharray = mysqli_fetch_array($result);
   // var_dump($botharray);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Use the returned data</title>
</head>
<body>
<ul>
	<?php 
        //3.Use the return data if any
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<li>$row[0]</li>";
		echo "<li>$row[1]</li>";
		echo "<li>$row[2]</li>";
		echo "<li>$row[3]</li>";
		echo "<li>$row[4]</li>";
		echo "<hr>";
	}
	 ?>
</ul>
</body>
</html>
