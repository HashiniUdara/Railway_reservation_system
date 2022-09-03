//Complaint_review.php
<?php
{
$dbHost = "localhost"; //Location Of Database usually its localhost

$dbUser = “root”; //Database User Name
$dbPass ="; //Database Password
$dbDatabase = “rail_connect"; //Database Name

  

session_start();

if($_SESSION["username”]=='admin' AND $_SESSION[" password”
{

$db = mysqli_connect($dbHost,$dbUser,$dbPass) or die(“Error connecting to database.");

//Connect to the databasse

mysqli_select_db($db, $dbDatabase)or die("Couldn't select the database.");

$sql = mysqli_query($db ,"SELECT * FROM “complaints™);

if(($sql) == TRUE){

echo “Select complaint: ";

 

='admin’ )

 

 

 

 

Soption
while($row = mysqli_fetch_assoc($sql))
{

echo " <br><a href=\"complaint_fetch.php\"> {$row[‘email’]}</a> PNR : {$row['pnr_no']}<br> °

1

}
else { echo “Fatal Error no complaints";
exit;
}
}

}
?>
