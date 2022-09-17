<?php 

$x=['Hi','I',"am","Salman",'.'];

//for($i=0;$i<count($x);$i++)
//{
//	echo $x[$i]." ";	
//}
$i=0;
while ($i<count($x)) {
	echo $x[$i]." ";
	$i++;
}
echo '<br/>';
$y=[1,2,3,4,5,6,7,8];

foreach ($y as $value) {
	echo $value.'<br/>';
}

$z=[
	['name'=>'Salman','Id'=>'181370103','age'=>22],
	['name'=>'Ali','Id'=>'24.......','age'=>13],
	['name'=>'Hami','Id'=>'181370111','age'=>25]
];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Tuts...</title>
</head>
<body>
	<h1>List is here</h1>
	<ul>
		<?php foreach ($z as $p) {?>
			<h3><?php echo $p['name']."->".$p['age'].'<br/>'; ?></h3>
		<?php } ?>
	</ul>
</body>
</html>