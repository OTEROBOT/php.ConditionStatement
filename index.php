<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้คำสั้งแบบ Condition (กลุ่มคำสั้ง if)</h1>
    <?php
        echo "<h2>คำสั้ง if</h2>";
        $x=5;
        $y=8;
        echo "\$x = $x<br>";
        echo "\$y = $y<br>";
        if($x<$y){
            echo "x น้อยกว่าค่าในตัวแปล y <br>";
        }else{
            echo "ค่าในตัวแปล y น้อยกว่าค่าในตัวแปล x <br>";
        }
        echo "-----------------------------------------------------";
        echo "<h2>Short hand</h2>";
        $score = 50;
        if($score >= 50) echo "ขอแสดงความยินดีด้วยคุณสอบผ่าน";
        echo "<br>";
        $result = $score >= 50 ? "ได้เกรด P": "ได้เกรด F";
        echo "<br>";
        echo "ผลการเรียนของคุณ",$result;
        echo "<br>";
        echo "<----------------------------------------------------->";
        echo "<h2>Switch Case</h2>";
        echo "<br>";
        $pet = "H";
        switch($pet){
            case'Cat':
                echo "คุณชอบนอนเหมือนแมว <br>";
                break;
                case'Dog':
                    echo "คุณชอบนอนเหมือนหมา <br>";
                    break;
                    case'Bird':
                        echo "คุณชอบนอนเหมือนนก <br>";
                        break;
                        
                        default:
                        echo "คุณเป็นมนุษย์";
                        break;
        }
     ?>
</body>
</html>