<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="save2.php" method="POST">
    <label for="sex">เพศ:</label>
    <select name="sex">
        <option value="f">หญิง</option>
        <option value="m">ชาย</option>
    </select><br>

    <label for="fname">ชื่อ:</label>
    <input type="text" id="fname" name="fname"><br>

    <label for="lname">นามสกุล:</label>
    <input type="text" id="lname" name="lname"><br>

    <label for="birthday">วันเกิด:</label>
    <input type="date" name="birthday"><br>

    <label for="username">Username:</label>
    <input type="text" name="username"><br>

    <label for="password">Password:</label>
    <input type="password" name="pwd"><br>

    <input type="submit" value="บันทึกข้อมูล">
</form>
</body>
</html>