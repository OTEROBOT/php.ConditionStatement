<?php
function calculateBMI($weight, $height) {
    return $weight / ($height * $height);
}

function interpretBMI($bmi) {
    if ($bmi < 18.5) {
        return ["น้ำหนักน้อย (ผอมเกินไป)", "ควรเพิ่มการทานอาหารที่มีประโยชน์ และออกกำลังกายเพื่อเสริมสร้างกล้ามเนื้อให้แข็งแรง"];
    } elseif ($bmi < 24.9) {
        return ["น้ำหนักปกติ", "ควรรักษาพฤติกรรมการทานอาหารที่ดีและออกกำลังกายอย่างสม่ำเสมอ"];
    } elseif ($bmi < 29.9) {
        return ["น้ำหนักเกิน (อ้วน)", "ควรควบคุมอาหาร ลดปริมาณน้ำตาลและไขมัน และออกกำลังกายเพื่อสุขภาพที่ดีขึ้น"];
    } else {
        return ["โรคอ้วน (อันตราย)", "ควรพบแพทย์หรือนักโภชนาการ เพื่อวางแผนควบคุมน้ำหนักอย่างเหมาะสมและปลอดภัย"];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $age = intval($_POST['age']);
    $weight = floatval($_POST['weight']);
    $height = floatval($_POST['height']) / 100; // แปลง cm เป็น m

    // คำนวณ BMI
    $bmi = calculateBMI($weight, $height);
    list($result, $advice) = interpretBMI($bmi);
    ?>

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
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                max-width: 500px;
                text-align: center;
            }
            .result {
                margin-top: 20px;
                padding: 10px;
                background-color: #f9f9f9;
                border-radius: 5px;
            }
            .advice {
                margin-top: 15px;
                color: #555;
                font-size: 14px;
            }
            .btn {
                display: inline-block;
                margin-top: 20px;
                padding: 10px;
                background-color: #4caf50;
                color: #ffffff;
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
                <p><strong>ชื่อ:</strong> <?php echo "$firstName $lastName"; ?></p>
                <p><strong>อายุ:</strong> <?php echo "$age ปี"; ?></p>
                <p><strong>BMI ของคุณ:</strong> <?php echo number_format($bmi, 2); ?></p>
                <p><strong>ผลลัพธ์:</strong> <?php echo $result; ?></p>
                <p class="advice"><em>คำแนะนำ:</em> <?php echo $advice; ?></p>
            </div>
            <a href="bmi_input.php" class="btn">คำนวณใหม่</a>
        </div>
    </body>
    </html>

    <?php
} else {
    echo "ไม่มีข้อมูลที่ส่งมา";
}
?>
