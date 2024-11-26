<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณพื้นที่รูปเรขาคณิต</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6e4; /* สีพื้นหลังพาสเทล */
            color: #4a4a4a; /* สีข้อความ */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2, h3 {
            text-align: center;
            color: #6b5b95; /* สีพาสเทลเข้ม */
        }

        form {
            background-color: #fff8e1; /* สีพื้นหลังฟอร์ม */
            border: 2px solid #ffe0b2; /* เส้นขอบสีพาสเทล */
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: calc(100% - 22px); /* ปรับขนาด */
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ffcc80;
            border-radius: 4px;
            background-color: #fffde7;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #81c784; /* สีพาสเทล */
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #66bb6a; /* สีเข้มขึ้นเมื่อชี้ */
        }

        input[type="submit"] {
            margin-right: 10px;
        }

        input[type="reset"] {
            background-color: #f48fb1; /* สีชมพูพาสเทล */
        }

        input[type="reset"]:hover {
            background-color: #f06292; /* สีเข้มขึ้นเมื่อชี้ */
        }
    </style>
</head>
<body>
    <div>
        <h2>โปรแกรมคำนวณพื้นที่รูปเรขาคณิต</h2>
        <h3>คำนวณพื้นที่รูปสามเหลี่ยม</h3>
        <form action="triangle_area.php" method="post">
            <label for="height">ความสูง :</label><br>
            <input type="text" id="height" name="height" placeholder="กรอกความสูง"><br>
            <label for="width">ความกว้าง :</label><br>
            <input type="text" id="width" name="width" placeholder="กรอกความกว้าง"><br>
            <input type="submit" value="คำนวณ">
            <input type="reset" value="ล้างค่า">
        </form>
    </div>
</body>
</html>
