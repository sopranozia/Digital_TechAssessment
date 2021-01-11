<?php 

 if(isset($_POST['from'], $_POST['to'], $_POST['departure'], $_POST['return'],$_POST['trip'],$_POST['trip'])) {


	echo "From: " . $_POST['from'] . "</br>";
	echo "Destination: " . $_POST['to']. "</br>";
	echo "Departure Date: " . $_POST['departure']. "</br>";
	echo "Return Date: " . $_POST['return']. "</br>";
	echo "Round: " . $_POST['trip']. "</br>";
	



$host = "localhost";
$username = "root";
$password = "";
$dbase = "flightdbase";


$conn = mysqli_connect($host,$username,$password,$dbase);


if(!$conn){

echo "cannot connect to the database " . mysqli_connect_error();

}

else{


$from = $_POST['from'];
$to = $_POST['to'];
$departure = $_POST['departure'];
$return = $_POST['return'];
$trip = $_POST['trip'];




$query = mysqli_query($conn,"INSERT INTO details (start, destination, departure, returnback, trip) VALUES('$from', '$to','$departure','$return','$trip') "); 
	echo "</br>";
	echo  "flight details has been successfully saved to the database! ";




}



}



?>