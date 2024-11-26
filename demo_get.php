<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์มสำหรับทดสอบ Method GET</title>
</head>
<body>
    <h2>โปรดกรอกข้อมูลลงในฟอร์ม</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        โปรดกรอกชื่อ : <input type="text" name="name"><br>
        เว็ปไซต์ที่แนะนำ : <input type="text" name="web"><br>
        <input type="submit">
    </form>

</body>
</html>