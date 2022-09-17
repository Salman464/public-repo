<?php
    $conn=mysqli_connect('localhost','root','','pizzas');
	//Connection check
	if(!$conn){
		echo "Connection error..!:".mysqli_connect_error();
	}
?>