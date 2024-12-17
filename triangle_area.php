<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>แสดงผลการคำนวณพิ้นที่รูปเรขาคณิต</title>
</head>
<body>
    <?php
        $height = $_POST['height']; //รับค่าความสูงสามเหลี่ยม
        $width = $_POST['width']; //รับค่าความกว้าง
        $area = 0.5*$height*$width;
        echo "<h2>รูปสามเหลี่ยมที่มีความสูง $height และมีตวามยาวฐาน $width</h2>";
        echo "<br><br>";
        echo "<h3>คำนวณพิ่นที่ได้ $area ตารางหน่วย</h3>";
    
    ?>

    <br>
    <a href="triangle_area_from" class="back-button">กลับไปบังฟรอม</a>
</div>
<?php
function triangleArea($h,$w){
    $a = 0.5/$h*$w;
    return $a;
}

?>
</body>
</html>