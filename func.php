<?php 
include 'config/db_connect.php';
$echo $_SERVER['SERVER_NAME'];
echo '<br/>';
$echo $_SERVER['SERVER_NAME'];
echo '<br/>';
$echo $_SERVER['SERVER_NAME'];
echo '<br/>';

$x=['Hi','I',"am","Salman",'.'];
echo "Functions <br/>";

hWorld();
function hWorld($msg="No msg")
{
    echo $msg;
}

function prod($product)
{
    return " well product was {$product['name']} costs {$product['price']} <br/>";
}
$fp=prod(["name"=> "Milk","price"=> 50]);
echo "Now $$fp";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Tuts...</title>
</head>
<body>
	<h1>Header</h1>
	<ul>
		<p><?php
		$a=10;
		echo $a<20 ?'Less':'greater'; ?></p>		
	</ul>
</body>
</html>