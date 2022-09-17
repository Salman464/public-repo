<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS</title>
</head>
<body>
    <form class="form" method="get" action="testing.php">
        <input type="text" name="complaint" value="" placeholder="Enter a complaint">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php 

if (isset($_GET['complaint'])) {
    echo $_GET['complaint']."</br>";
    echo "-";
    $cmp=$_GET['complaint'];
    $result=exec("python DepartmentPredictionModel/CMS_MODEL.py $cmp");
    
    print_r($result);
    echo "-";
}
echo "<hr>";
$a=array('a','b','c','d','e','f','z','g');
echo $a[array_rand($a)];
 ?>