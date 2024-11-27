<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์ BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }
        h1 {
            text-align: center;
            color: #333333;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #dddddd;
            border-radius: 5px;
            color: #333333;
        }
        .btn {
            display: block;
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background-color: #4caf50;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ผลลัพธ์ BMI</h1>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $firstName = htmlspecialchars($_POST['first_name']);
                $lastName = htmlspecialchars($_POST['last_name']);
                $age = intval($_POST['age']);
                $weight = floatval($_POST['weight']);
                $height = floatval($_POST['height']) / 100; // แปลงจาก cm เป็น m

                // คำนวณ BMI
                $bmi = $weight / ($height * $height);

                // แปลผล BMI
                if ($bmi < 18.5) {
                    $result = "น้ำหนักน้อย (ผอมเกินไป)";
                } elseif ($bmi < 24.9) {
                    $result = "น้ำหนักปกติ";
                } elseif ($bmi < 29.9) {
                    $result = "น้ำหนักเกิน (อ้วน)";
                } else {
                    $result = "โรคอ้วน (อันตราย)";
                }

                echo "<p>ชื่อ: $firstName $lastName</p>";
                echo "<p>อายุ: $age ปี</p>";
                echo "<p>BMI ของคุณ: " . number_format($bmi, 2) . "</p>";
                echo "<p>ผลลัพธ์: $result</p>";
            } else {
                echo "<p>ไม่มีข้อมูลที่ส่งมา</p>";
            }
            ?>
        </div>
        <a href="bmi_input.php" class="btn">คำนวณใหม่</a>
    </div>
</body>
</html>
