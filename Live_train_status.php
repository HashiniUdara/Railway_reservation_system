//Live_train_status.php

<?php
iffisset($_POST['submit']))
| {
$train_no=$_POST["Thumber"];
$started_date=$_POST["startdate"];
$started_date = date("d-m-Y", strtotime($started_date));
$api_url="https://api.railwayapi.com/v2/live/train/” trim ($train_no).
“/date/" trim ($started_date).”/apikey/Son7w9zra0/";
$json=file_get_contents("$api_url"); //Using the Api
Sjson=stripslashes(html_entity_decode($json)); // Stripping the useless shit
$json_decoded = json_decode($json.true);
echo “Train Name :{$json_decoded['train']['‘name’] }';
‘echo "<br> Last Position : ";
print_r(Sjson_decoded{ position’);
echo "<br>";
echo ‘<table>’;
//Tabel starts here -you have to put attribute names ( mentioned in echo comments )
foreach ($json_decoded|'route’] as $route)
i {
// Output a row
echo "<tr>";
echo "<td> (Sroute['station’]['name’]}({Sroute['station’]['code’}}) </td>"; // Station name and code
echo *<td>{$route[‘actarr}}</td >"; // actual arrival time
echo "<td> {$routef'actdep']} </td>"; //actual departure time
echo "<td> {Sroute['status’]} </td>"; // Late/Early
if(Sroute['has_departed’]==true) //Current Position
echo "<td> Departed</td>";
else
echo “<td> Estimated</td>";

 

 

 

 

echo “<td> {Sroute[’scharr'} </td>"; //Scheduled arrival
echo "<td> {Sroutel'schdep']}</td>"; //scheduled departure
echo *<td>{Sroute['day]}</td>";  //Enroute day
echo "<td> {Sroute[‘distance']} </td>"; // Distance (kms)
echo "</tr>";

}

echo ‘</table>’;
1

 
