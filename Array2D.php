<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2D</title>
</head>
<body>
<h1>Array 2D</h1>
<?php
$cars = array (
array ("Volvo",22,18),
array("BMW", , 13),
array ( "Saab",5,2),
array("Land Rover",17,15)
);

echo "<h2>ปริมาณการสั้งซื้อรถ</h2>";
for($i=0;$i<4;$i){
    echo $cars[i][0].": In stock: ".$cars[i][1].", sold: ".$cars[i][2].".<br>";
    echo "<br>\n";
}

?>

</body>
</html>