 
//Book_Ticket.php
if(array_key_exists(*submit’$ POST)}{

 

Sdb=mysqli_connect("iocalhost’,"root’,”",
OR die("Unable to Connect to the Database.”

 

 

Snum=mysqli_real_escape_string(Sdb $ POSTI'n’):
Stype=mysqli_real_escape_string(Sdb,$_POST['Ttype'));
echo ‘<table>:

echo "<tr>";
echo "<th>Source</th>";
echo "<th>Destination</th>";
echo "<th> Train Name</th
echo "<th>Train Number<,
echo "<th>Fare</th>”;
echo "<th>Book</th> </tr>";
‘$q=mysqli_query($db,"SELECT * FROM trains WHERE from_station_name LIKE
"96° $src."9%' AND to_station_name LIKE '%".$dst."%' AND train type='Stype’
if(Sq==TRUE)(
$n=mysqli_num_rows($q);
i<$n; $i++)

  

 

 

Srow=mysqli_fetch_array(Sq);
switch(Stype){
case 'G

 

$v=$num*i;break:

=$num" 4:break:

$v=Snum"),5S;break:

Shum" 6ibreak:

$v=Snum"?.7;break:
case ‘Raj’: Sv=Snum'? S;break:
ase ‘SF: $v=$num"2;break;
ease 'Skr':$v=Snum*! 6:break:
default $v=Snum*!.s;

}

$f=$v'Srow( distance’;

 
   
 
 

echo "<tr> <td> {Srowl from station name’) </td> <td> (Srow('to_station_name’},

</td> <td> <form action="form.php’ method="post’ > {Srowf'train_name'}}</td>

<td> (Srowf train_number')} </td> <td> {$f} </td> <td> <input type="hidden
value={Srowftrain_number'}

name='tno'> <input type="hidden’ value="{Sf}’ name="fare'>

|<input type="hidden’ value='{Snum}

ame='num'> <input type='submit' value='BOOK' name='book'> </form> </td> </tr>";

 

   

 
