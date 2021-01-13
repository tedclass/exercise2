<html>
 <head>
 <title>List of KL Restaurant</title>
 </head>
 <body>
 <center>
 <h1>List of KL Restaurant</h1>
 <!--create table structure using HTML first-->
 <table border="1">
 <tr>
 <th>Restaurant ID</th>
<th>Restaurant Name</th>
<th>Address</th>
<th>Phone</th>
 </tr>
<tr>
 <th>0</th>
<th>All my meat Restaurant</th>
<th>Menara Standard Chartered, TPM, Knee deep in pussay</th>
<th>you know my number</th>
 </tr>
 <tr>
 <th>1</th>
<th>All my soup Restaurant</th>
<th>Menara Standard Chartered, TPM, Knee deep in pussay</th>
<th>you know my number</th>
 </tr>
 <tr>
 <th>2</th>
<th>All my raviolioi Restaurant</th>
<th>Menara Standard Chartered, TPM, Knee deep in pussay</th>
<th>you know my number</th>
 </tr>
  <?php
  //this establishes connection to database server
  $connectionInfo = array("UID" => "adminsimpleweb", "pwd" => "Heckno2u4", "Database" => "simplewebDatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:simplewebtp0500890.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
if(!$conn)
{
    die("Error connection: ".sqlsrv_errors());
}
else
{
    echo "<script>alert( 'Success!');</script>";
}
  $sql= "SELECT * FROM [dbo].[restaurant]";
  $getResults= sqlsrv_query($conn, $tsql);
  
  if ($getResults == FALSE)
{
 die(sqlsrv_errors());
}

 while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
 echo "<tr>";
 echo "<td>". $row['restaurant_id'] . "</td>";
 echo "<td>". $row['restaurant_name'] ."</td>";
 echo "<td>". $row['restaurant_address'] . "</td>";
 echo "<td>". $row['restaurant_phone'] . "</td>";
 echo "</tr>";
 }
 sqlsrv_free_stmt($getResults);
  ?>
 </table>
 </center>
 </body>
</html>
