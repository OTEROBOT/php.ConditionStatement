<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณ BMI</title>
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
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>โปรแกรมคำนวณ BMI <br> โดย ยศวริศ อาจนนท์ลา 110</h1>
        <form method="POST" action="bmi_result.php">
            <div class="form-group">
                <label for="first_name">ชื่อ:</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">นามสกุล:</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>
            <div class="form-group">
                <label for="age">อายุ:</label>
                <input type="number" name="age" id="age" required>
            </div>
            <div class="form-group">
                <label for="weight">น้ำหนัก (กก.):</label>
                <input type="number" name="weight" id="weight" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="height">ส่วนสูง (ซม.):</label>
                <input type="number" name="height" id="height" step="0.1" required>
            </div>
            <button type="submit" class="btn">คำนวณ BMI</button>
        </form>
    </div>
</body>
</html>
