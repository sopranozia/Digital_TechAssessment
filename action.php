

<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hotels_db";


$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn){

	die("error connecting to database!" + mysqli_connect_error());
}


/*

if(isset($_POST['query'])){

$inputText = $_POST['query'];

$query = mysqli_query($conn,"SELECT city FROM hotels WHERE LIKE '%$inputText%'");

if($query->num_rows > 0){

	while($row = $query->fetch_assoc()){

		echo "<a href='#'  class='list-group-item list-group-item-action border-1'>".$row['city']."</a>";
	}
}

else{

	echo "<a href='#' class='list-group-item  border-1'>No Record Found</a>";
}
}

*/




  if(isset($_POST['query'])){

echo "connected";

$inputText = $_POST['query'];
$query = "SELECT city FROM hotels WHERE city='$inputText'";
$result  = $conn->query($query);
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
	echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['city']."</a>";
}


}
else{
	echo "<a href='#' class='list-group-item  border-1'>No Record Found</a>";
}


}
  











 ?>

