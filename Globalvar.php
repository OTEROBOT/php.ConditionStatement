<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBALS VAR</title>
</head>
<body>
    <h1>GLOBALS VAR</h1>
    <?php
        $x = 75; // ประกาศตัวแปร x
        echo $x; // แสดงค่า x
        echo "<br>ค่าของ x : ".$x."<br>"; // แสดงค่า x พร้อมคำอธิบาย

        // ฟังก์ชัน addition อ่านค่า x จาก $GLOBALS
        function addition(){
            global $x; // ใช้ global เพื่อเข้าถึงตัวแปรภายนอก
            $x = 35; // เปลี่ยนค่าของ $x
            echo "อ่านจาก function ค่าของ x : ".$x."<br>"; // แสดงค่าใหม่ของ $x
        }
    
        addition(); // เรียกฟังก์ชัน addition
        echo "<br>";
        echo "ค่าของ x ==> ".$x."<br>"; // แสดงค่าของ $x หลังจากการเปลี่ยนแปลงในฟังก์ชัน addition

        echo "<br>";

//-----------------------------------------------------------------------
echo "-------------------------------------------------------------------------------<br>";

        echo "<h2>การใช้ข้อมูลจาก Server \$_SERVER </h2>";
        
        echo "PHP_SELF: ".$_SERVER['PHP_SELF']."<br>";
        echo "SERVER_NAME: ".$_SERVER['SERVER_NAME']."<br>";
        echo "HTTP_HOST: ".$_SERVER['HTTP_HOST']."<br>";
        echo "HTTP_REFERER: ".(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'N/A')."<br>";
        echo "HTTP_USER_AGENT: ".$_SERVER['HTTP_USER_AGENT']."<br>";
        echo "SCRIPT_NAME: ".$_SERVER['SCRIPT_NAME']."<br>";
    ?>
</body>
</html>
