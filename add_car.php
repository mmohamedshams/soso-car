<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة سيارة جديدة</title>
</head>
<body>
    <h1>إضافة سيارة جديدة</h1>
    <form action="add_car.php" method="post">
        <label for="name">اسم السيارة:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="image_url">رابط الصورة:</label><br>
        <input type="text" id="image_url" name="image_url"><br><br>
        <label for="engine">المحرك:</label><br>
        <input type="text" id="engine" name="engine"><br><br>
        <label for="power">القوة:</label><br>
        <input type="text" id="power" name="power"><br><br>
        <label for="price">السعر:</label><br>
        <input type="text" id="price" name="price"><br><br>
        <input type="submit" value="إضافة">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Capture form data
        $name = $_POST['name'];
        $image_url = $_POST['image_url'];
        $engine = $_POST['engine'];
        $power = $_POST['power'];
        $price = $_POST['price'];

        // Connect to the database
        $conn = new mysqli('localhost', 'username', 'password', 'car_showroom');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into the database
        $sql = "INSERT INTO cars (name, image_url, engine, power, price) VALUES ('$name', '$image_url', '$engine', '$power', '$price')";

        if ($conn->query($sql) === TRUE) {
            echo "تم إضافة السيارة بنجاح!";
        } else {
            echo "خطأ: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
