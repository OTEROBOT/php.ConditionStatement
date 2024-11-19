<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>คำสั่ง loop ใน PHP</title>
</head>
<body>
    <h1>การใช้คำสั่งแบบวนลูป Loop Statement</h1>
    <?php
        echo "<h2>while Loop</h2>";
        echo "<br>";
        $x = 1;
        while ($x <= 5) {
            echo "จำนวนที่ : $x <br>";
            $x++;
        }
        $i = 40;
        while ($i <= 40) {
            echo "-";
            $i++;
        }
        echo "<br>";
//----------------------------------------------------------------------

        echo "<h2>DO Loop</h2>";
        echo "<br>";

        $x = 1;
        while ($x <= 5) {
            echo "จำนวนที่ : $x <br>";
            $x++;
        }
        $i = 10;
        while ($i <= 40) {
            echo "-";
            $i++;
        }
        echo "<br>";

        echo "<h2>do...while loop</h2>";
        echo "<br>";

        $y = 1;
        do {
            echo "do..while รอบที่ $y <br>";
            $y++;
            if ($y >= 5) break;
        } while ($y <= 9999999999);
        echo "<br>"; 

        echo "---------------------------------------------------------";
        echo "<h2>FOR LOOP</h2>";
        for ($i = 0; $i < 10; $i++) {
            echo "FOR รอบที่ $i <br>";
        }
        echo "----------------------------------------------------------";
        echo "<h2>FOR ซ้อน FOR</h2>";
        $rows = 6; // จำนวนบรรทัดที่ต้องการ

        for ($i = 1; $i <= $rows; $i++) { // วนลูปตามจำนวนบรรทัด
            for ($j = 1; $j <= $i; $j++) { // วนลูปเพื่อพิมพ์เครื่องหมาย #
                echo "#";
            }
            echo "<br>"; // ขึ้นบรรทัดใหม่
        }
        echo "----------------------------------------------------------";
        echo "<h2>Foreach Loop</h2>";
        $pet = array("แมว", "หมา", "นก", "ปลา", "หมูเด้ง");
        foreach ($pet as $value) { // ใช้ตัวแปร $pet ที่ถูกต้อง
            echo "ฉันชอบ ".$value."<br>"; // อ้างถึงค่าใน array
        }
        echo "-----------------------------------------------";
        echo "<h2>FOR EACH LOOP แบบ key=>value</h2>";
        $food= array ("D"=>"ผัดไทย","O"=>"ส้มตำ","P"=>"ไข่","F"=>"ไก่");
        foreach ($food as $person => $value){
            echo "ชื่อ $person ชอบ $value <br>";
        }
    ?> 
</body>
</html>
