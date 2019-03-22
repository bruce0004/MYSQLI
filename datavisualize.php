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
   }?>

   <!DOCTYPE html>
   <html>
   <head>
      <title>Print Data in HTML Table</title>
   </head>
   <body>
     <table border="2" width="80%" cellpadding="10">
        <thead>
           <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Age</th>
              <th>Course</th>
           </tr>
        </thead>
        <tbody>
           <?php 
              //Use returned data 
           while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                   <td> $row[id]</td>
                   <td> $row[name]</td>
                   <td> $row[Email_id]</td>
                   <td> $row[Gender]</td>
                   <td> $row[Age]</td>
                   <td> $row[course]</td>
              </tr>";
           }

            ?>
        </tbody>
     </table>

     <OL>
        <li>Visit phpmyAdmin and create a db Inventory</li>
        <li>In the db, create a table of products</li>
        <li>In the table, create the following columns id(primaryKey, product_name, product_price, quantity)</li>
        <li>Manually <b>autopopulate</b> the fields with atleast 10products</li>
        <li>Create a php file <b>Inventory.php</b></li>
        <ol>
           <li>Createa DB connection</li>
           <li>Query your  DB for all the data</li>
           <li></li>
        </ol>
     </OL>
   </body>
   </html>