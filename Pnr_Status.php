Pnr_Status.php

$found = true;

}
| if($found==true)

{
echo
echo

echo *

Train Name Sticket{'train.name’] } <br>";
date of Journey : {Sticket{’doj]] } <br>";
Total Passengers {Sticket{'total_passengers'}}<br>";

if(Sticket==date(d-m-y))
{echo “chart_prepared <br>";}
else echo “chart not prepared <br>";

echo
echo
echo
‘echo

echo *
echo *

 

From Station : ($ticket['from_station']} <br>";

To Station : (Sticket[‘to_station’}} <br> ";

Boarding point «{$ticket{'boarding_point']} <br>";
Reservation Upto :{Sticketl'reservation_upto’}}) <br>";
‘Train Details : {Sticket['train_name’] }<br>";

‘Journey Class : (Sticket{journey_class]} <br>";

 

foreach ($passengers_details|'passengers’] as $passenger)
{echo "{$passenger('no'}}, (Spassengerl‘current_status)}, (Spassenger{'booking status} * ; }

}

else if($found==true) {
$api_url="httos://api railwayapi.com/v2//pnr-status/pnt/" trim ($pnr_no).”/apikey/Son7w9zra0/";
Sjson=file_get_contents("$api_url”); //Using the Api
Sjson=stripslashes(html_entity decode($json)); // Stripping the useless shit
Sjson_decoded = json_decode(Sjson,true);

echo *
‘echo °

echo
echo
echo
echo
echo
echo
echo
echo

Train Name :{$json_decoded{'train'][‘name']} <br>";
date of Journey : {$son_decoded|'doj')} <
Total Passengers {$json_decoded|'total_passengers']} <br
‘Chart Prepared -{$json_decoded['chart_prepared'}} <br>
From Station : {$json_decoded['chart_prepared']['name’] } ({Sjson_decoded{'chart_prepared’]['code’]}) <br>";
To Station : {$son_decoded{'to_station']['name} (($json_decoded{'to_station']{'code’]}) <br>";

 

 

“Boarding point :{$json_decoded{'boarding_point'][‘name’] } ( {$json_decoded['boarding_point']['code'}}) <br>";
"Reservation Upt:
* Train Details : ($json_decodedf'train']['name’] } , ($json_decoded{train'}['number]} <br>";

* Journey Class : ($json_decoded{journey_class']['name'} , ($json_decoded|journey_class']['code']} <br>";

{$json_decoded['reservation_upto']['name'] } ({$json_decoded'reservation_upto'][‘code’}}) <br>

 

foreach (Sjson_decoded| passengers’) as Spassenger)

| f
