<?php
//Login  statusretriever.php
if(isset($_POST['submit’]))
{

$dbHost = "localhost"; _//Location Of Database usually its localhost
$dbUser = "root"; //Database User Name

SdbPass //Database Password

$dbDatabase = “rail_connect’; //Database Name

 $dbHost="localhost";
 $dbUser="root"
 $dbPass="";
 $dbDatabase="rail_connect";

 

$db = mysqli_connect($dbHost,$dbUser,$dbPass) or die(“Error connecting to database.");
//Connect to the databasse

mysqli_select_db($db, $dbDatabase)or die( "Couldn't select the database.");

$usr = mysqli_real_escape_string($db,$_POST['username']);

$pas = mysqli_real_escape_string($db,$_POST[‘password']);

echo $usr,

echo $pas;

$sql = mysqli_query($db ,"SELECT * FROM users_table WHERE username="$usr' AND password="$pas' ");
if(mysqlinum_rows($sql) == 1){

$row = mysqli_fetch_array($sql);

session_start();

$_SESSION['usermame'] = $row[‘username’];

$_SESSION['logged’] = TRUE;

header("Location: users_page.php"); // Modify to go to the page you would like

exit;

}
else{ echo"Error: Username or Password Incorrect Or User does not Exist " ; sleep(5);
header("Location: user_login.php");
}

}
?>