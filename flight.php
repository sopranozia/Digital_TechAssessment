<?php 

 if(isset($_POST['from'], $_POST['to'], $_POST['departure'], $_POST['return'],$_POST['trip'],$_POST['trip'])) {


	echo "From: " . $_POST['from'] . "</br>";
	echo "Destination: " . $_POST['to']. "</br>";
	echo "Departure Date: " . $_POST['departure']. "</br>";
	echo "Return Date: " . $_POST['return']. "</br>";
	echo "Round: " . $_POST['trip']. "</br>";
	echo "Oneway: " . $_POST['trip']. "</br>";  
}

else{

	echo "error ";
}


?>